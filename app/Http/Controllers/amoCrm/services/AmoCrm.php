<?php

namespace App\Http\Controllers\amoCrm\services;


use App\AmocrmIntegration;
use App\AmocrmToken;
use App\Http\Controllers\amoCrm\components\CurlTransport;
use Illuminate\Support\Facades\Log;
use \DB;

class AmoCrm
{
    public static function getIntegration(string $valueCode, $isId = false): AmocrmIntegration
    {

        if (!$isId) {
            $integration = self::getIntegrationModel($valueCode);
        } else {
            $integration = self::getIntegrationModelById($valueCode);
        }
        if (!$integration) {
            throw new \Exception('AmoCrm integration not found, cityCode = ' . $valueCode, 4001);
        }

        Log::debug('Integration model', ['integration' => $integration]);

        if (!$integration->token) {
            return self::accessToken($integration);
        }

        if (strtotime("now") >= $integration->token->expired_time) {
            return self::refreshAccessToken($integration);
        }

        return $integration;
    }

    public static function accessToken($integration)
    {
        Log::debug('accessToken', ['$integration' => $integration]);
        $url = $integration->domain . 'oauth2/access_token';
        $headers = [
            'Content-Type: application/json'
        ];

        $requestBody = [
            'client_id' => $integration->client_id,
            'client_secret' => $integration->client_secret,
            'grant_type' => 'authorization_code',
            'code' => $integration->code ?? null,
            'redirect_uri' => $integration->redirect_url,
        ];
        $curl = new CurlTransport();

        $accessTokenResponse = $curl->send($url, $headers, $requestBody);

        Log::debug('Get access token ', ['url' => $url, 'request' => $requestBody, 'response' => $accessTokenResponse]);

        if ($curl->errorNo || $curl->responseCode != 200) {
            throw new \Exception('Error to get access token Integrtion id=' . $integration->id);
        }

        $model = AmocrmToken::where('integration_id', [$integration->id])->first();

        Log::debug('$model', ['$model' => $model]);

        if (!$model) {
            $model = new AmocrmToken();
        }

        $model->integration_id = $integration->id;
        $saved = self::updateAmocrmAccessToken($model, $accessTokenResponse);

        if (!$saved) {
            throw new \Exception('Error to save access token in AmocrmToken . Integrtion id=' . $integration->id);
        }

        return self::getIntegrationModelById($integration->id);
    }

    public static function changeOrder($itemId, $order)
    {
        $curentIntegration = AmocrmIntegration::select('amocrm_integrations.*')
            ->where('id', $itemId)
            ->first();

        if (!$curentIntegration) {
            return false;
        }

        $integrations = AmocrmIntegration::select('amocrm_integrations.*')
            ->where('order', '>=', $order)
            ->where('city_id', $curentIntegration->city_id)
            ->where('id', '!=', $curentIntegration->id)
            ->orderBy('order')
            ->get();

        if (!$integrations) {
            return false;
        }


        $curentIntegration->order = $order;
        $curentIntegration->save();

        $lastOrder = $order + 1;
        foreach ($integrations as $item) {
            $item->order = $lastOrder;
            if ($item->save()) {
                $lastOrder++;
            }
        }

        return true;
    }

    public static function getRefreshTokenIntegrationId($id) {
        $model = self::getIntegrationModelById($id);
        return self::refreshAccessToken($model);
    }

    public static function refreshAccessToken(AmocrmIntegration $integration)
    {
        $url = $integration->domain . 'oauth2/access_token';
        $headers = [
            'Content-Type: application/json'
        ];

        $requestBody = [
            'grant_type' => 'refresh_token',
            'client_id' => $integration->client_id,
            'client_secret' => $integration->client_secret,
            'refresh_token' => $integration->token->refresh_token ?? null,
            'redirect_uri' => $integration->redirect_url,
        ];
        $curl = new CurlTransport();

        $refreshTokenResponse = $curl->send($url, $headers, $requestBody);

        Log::debug('Get refresh token ', ['url' => $url, 'request' => $requestBody, 'response' => $refreshTokenResponse]);

        if ($curl->errorNo || $curl->responseCode != 200) {
            throw new \Exception('Error to get refresh token. Integrtion id=' . $integration->id);
        }

        $model = $integration->token;

        Log::debug('$model', ['$model' => $model->refresh_token]);
        $save = self::updateAmocrmToken($model, $refreshTokenResponse);
//        $save = self::updateAllAmocrmToken($integration, $refreshTokenResponse);

        if (!$save) {
            throw new \Exception('Error to save refresh token in AmocrmToken . Integrtion id=' . $integration->id);
        }

        return self::getIntegrationModelById($integration->id);
    }

    /**
     * @param string $cityCode
     * @return mixed
     */

    public static function getIntegrationModel(string $cityCode)
    {
        return AmocrmIntegration::select('amocrm_integrations.*')
            ->join('cities', 'cities.id', '=', 'amocrm_integrations.city_id')
            ->select('amocrm_integrations.*', 'cities.id as cities_id')
            ->where('cities.code', $cityCode)
            ->where('amocrm_integrations.is_active', 1)
            ->where('amocrm_integrations.send_status', 0)
            ->orderBy('amocrm_integrations.order')
            ->first();
    }

    public static function getIntegrationModelById($id)
    {
        return AmocrmIntegration::findOrFail($id);
    }

    public static function updateActive($id, $value)
    {
        return AmocrmIntegration::where('id', $id)
            ->update(['is_active' => $value, 'send_status' => 0]);
    }

    public static function getAmocrmTokens($id)
    {
        return AmocrmToken::where('id', $id)->get();
    }

    public static function updateSendStatus($id, $value)
    {
        return AmocrmIntegration::where('id', $id)
            ->update(['send_status' => $value]);
    }

    public static function updateAmocrmToken(AmocrmToken $model, array $params)
    {
        return AmocrmToken::where('refresh_token', $model->refresh_token)
            ->update([
                'access_token' => $params['access_token'],
                'refresh_token' => $params['refresh_token'],
                'expires_in' => $params['expires_in'],
                'expired_time' => (time() + $params['expires_in'] - (3600 * 2)),
            ]);
    }

    public static function updateAmocrmAccessToken(AmocrmToken $model, array $params)
    {
        $oldToken = $model->refresh_token;

        $model->access_token = $params['access_token'];
        $model->refresh_token = $params['refresh_token'];
        $model->expires_in = $params['expires_in'];
        $model->expired_time = (time() + $params['expires_in'] - (3600 * 2));
        $model->save();

        self::updateRelatedTokens($oldToken, $params);

        return $model;
    }

    private static function updateRelatedTokens($oldRefreshToken, array $params)
    {
        AmocrmToken::where('refresh_token', $oldRefreshToken)
            ->update([
                'access_token' => $params['access_token'],
                'refresh_token' => $params['refresh_token'],
                'expires_in' => $params['expires_in'],
                'expired_time' => (time() + $params['expires_in'] - (3600 * 2)),
            ]);
    }


    public static function updateAllAmocrmToken(AmocrmIntegration $integration, array $params)
    {
        $relatedIntegrations = AmocrmIntegration::where('client_id', $integration->client_id)->get();

        foreach ($relatedIntegrations as $relatedIntegration) {
            AmocrmToken::where('integration_id', $relatedIntegration->id)
                ->update([
                    'access_token' => $params['access_token'],
                    'refresh_token' => $params['refresh_token'],
                    'expires_in' => $params['expires_in'],
                    'expired_time' => (time() + $params['expires_in'] - (3600 * 2))
                ]);
        }
        return true;
    }

    public static function updateIntegration(AmocrmIntegration $integration, array $params) {
        $integration->code = $params['code'];
        $integration->client_id = $params['client_id'];
        $integration->client_secret = $params['client_secret'];
        return $integration->save();
    }
}
