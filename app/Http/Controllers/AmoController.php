<?php

namespace App\Http\Controllers;

use App\AmocrmIntegration;
use App\AmocrmToken;
use App\Category;
use App\City;
use App\Http\Controllers\amoCrm\services\AmoCrm;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Psy\Util\Json;
use App\QueryLogs;

class AmoController extends Controller
{

    public function index() {
        $cityOrder = DB::table('amocrm_integrations')
            ->join('cities', 'amocrm_integrations.city_id', '=', 'cities.id')
            ->select('cities.id as cities_id', 'cities.name as cities_name', 'cities.code as cities_code', DB::raw('max(amocrm_integrations.order) as max_order'))
            ->groupBy( 'cities_id', 'cities_name', 'cities_code')
            ->get();

        $hashCityOrder= [];
        foreach ($cityOrder as $item) {
            $hashCityOrder[$item->cities_id] = $item->max_order;
        }

        $integrations = DB::table('amocrm_integrations')
            ->join('cities', 'amocrm_integrations.city_id', '=', 'cities.id')
            ->select('cities.id as cities_id', 'cities.name as cities_name', 'amocrm_integrations.*')
            ->orderBy('cities.name')
            ->orderBy('amocrm_integrations.order')
            ->get();

        return view('pages.admin.amo-crm.index', ['integrations' => $integrations, 'hashCityOrder' => $hashCityOrder]);
    }

    public function queries()
    {
        $integrations = DB::table('query_logs')
            ->join('cities', 'query_logs.city_id', '=', 'cities.id')
            ->select('cities.id as cities_id', 'cities.name as cities_name', 'query_logs.*')
            ->orderBy('query_logs.created_at', 'desc')
            ->get();

        return view('pages.admin.amo-crm.crm_query_index', ['items' => $integrations]);
    }

    public function queriesSecret()
    {
        $integrations = DB::table('query_logs')
            ->join('cities', 'query_logs.city_id', '=', 'cities.id')
            ->select('cities.id as cities_id', 'cities.name as cities_name', 'query_logs.*')
            ->orderBy('query_logs.created_at', 'desc')
            ->get();

        return view('pages.admin.amo-crm.crm_querySecret_index', ['items' => $integrations]);
    }

    public function queriesSecretRemove(Request $request)
    {
        QueryLogs::findOrFail($request->id)->delete();
        return redirect()->route('amo.queriesSecret');
    }

    public function changeOrder(Request $request)
    {
        $itemId = $request->id ? (int)$request->id : 0;
        $order = $request->order ? (int)$request->order : 1;
        $result = AmoCrm::changeOrder($itemId, $order);
        return JSON::encode($result);
    }


    public function getMaxOrder()
    {
        $integrations = DB::table('amocrm_integrations')
            ->join('cities', 'amocrm_integrations.city_id', '=', 'cities.id')
            ->select('cities.id as cities_id', 'cities.name as cities_name', 'cities.code', 'max(order)')
            ->groupBy('city_id')
            ->groupBy('max_order')
            ->get();

        return view('pages.admin.amo-crm.index', ['integrations' => $integrations]);
    }

    public function table()
    {
        $integrations = AmocrmIntegration::all();
        $cities = City::all();
        foreach ($cities as $city) {
            $arr = $integrations->filter(function ($item, $key) use ($city) {
                return $item->city_id == $city->id;
            });
        }
        return view('pages.admin.crm_integration', ['integrations' => $integrations]);
    }

    public function updateActive(Request $request)
    {
        $id = $request->id ? (int)$request->id : 0;
        $is_active = $request->is_active === 'true' ? 1 : 0;
        return AmoCrm::updateActive($id, $is_active);
    }

    public function create()
    {
        $cities = City::all();
        return view('pages.admin.amo-crm.crm_integration-create', ['cities' => $cities]);
    }

    public function edit(Request $request)
    {
        $cities = City::all();
        $integration = AmocrmIntegration::findOrFail($request->id);
        $integration->token;
        Log::debug('Integration model', ['integration' => $integration]);
        return view('pages.admin.amo-crm.crm_integration-edit', ['integration' => $integration, 'cities' => $cities]);
    }

    public function remove(Request $request)
    {
        DB::beginTransaction();
        try {
            AmocrmIntegration::findOrFail($request->id)->delete();
            AmocrmToken::where('integration_id', $request->id)->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        return redirect()->route('amo-integration');
    }

    public function store(Request $request)
    {
        $integration = new AmocrmIntegration();
        $max_order = DB::table('amocrm_integrations')
            ->where('city_id', '=', $request->input('city_id'))
            ->max('order');
        $integration->order = $max_order + 1;
        $integration->city_id = $request->input('city_id');
        $integration->name = $request->input('name');
        $integration->client_id = $request->input('client_id');
        $integration->client_secret = $request->input('client_secret');
        $integration->code = $request->input('code');
        $integration->domain = $request->input('domain');
        $integration->redirect_url = 'https://umag.kz/';
        $integration->send_status = $request->input('send_status');
        $integration->save();

        $tokenData = AmocrmIntegration::where('client_id', [$integration->client_id])->first();

        Log::debug('tokenData', ['$tokenData' => $tokenData]);

        if (!$tokenData->token) {
            AmoCrm::accessToken($integration);
            return false;
        } else {
            $model = new AmocrmToken();
            $model->access_token = $tokenData->token->access_token;
            $model->refresh_token = $tokenData->token->refresh_token;
            $model->expires_in = $tokenData->token->expires_in;
            $model->expired_time = $tokenData->token->expired_time;
            $model->integration_id = $integration->id;
            $model->save();
        }

        return redirect()->route('amo-integration');
    }

    public function editStore(Request $request)
    {
        $integration = AmocrmIntegration::find($request->id);
        if (!empty($integration)) {
            $integration->city_id = $request->input('city_id');
            $integration->name = $request->input('name');
            $integration->domain = $request->input('domain');
            $integration->redirect_url = 'https://umag.kz/';
            $integration->send_status = $request->input('send_status');

            $fieldsChanged = ($integration->code != $request->input('code') ||
                $integration->client_id != $request->input('client_id') ||
                $integration->client_secret != $request->input('client_secret'));

            if ($fieldsChanged) {
                $oldClientId = $integration->client_id;

                DB::beginTransaction();

                try {
                    $integration->code = $request->input('code');
                    $integration->client_id = $request->input('client_id');
                    $integration->client_secret = $request->input('client_secret');

                    $relatedIntegrations = AmocrmIntegration::where('client_id', $oldClientId)->get();
                    $intNew = AmoCrm::accessToken($integration);
//                    foreach ($relatedIntegrations as $relatedIntegration) {
//                        AmocrmToken::where('integration_id', $relatedIntegration->id)
//                            ->update([
//                                'access_token' => $intNew->token->access_token,
//                                'refresh_token' => $intNew->token->refresh_token,
//                                'expires_in' => $intNew->token->expires_in,
//                                'expired_time' => $intNew->token->expired_time
//                            ]);
//                    }
                    Log::debug('$intNew', ['$intNew' => $intNew]);
                    AmocrmIntegration::where('client_id', $oldClientId)
                        ->update([
                            'code' => $request->input('code'),
                            'client_id' => $request->input('client_id'),
                            'client_secret' => $request->input('client_secret'),
                            'send_status' => 0
                        ]);

                    DB::commit();
                    $integration->save();
                } catch (\Exception $e) {
                    DB::rollback();
                    AmocrmIntegration::where('client_id', $oldClientId)
                        ->update([
                            'send_status' => 2
                        ]);
                    Log::error('Transaction Error', ['exception' => $e]);
                }
            } else {
                $integration->save();
            }
        }

        return redirect()->route('amo-integration');
    }

    public function getTokens(Request $request)
    {
        $response = AmoCrm::accessToken($request);
        return json_encode($response);
    }
    public function getRefreshToken(Request $request) {
        $response = AmoCrm::getRefreshTokenIntegrationId($request->id);
        return json_encode($response);
    }


}
