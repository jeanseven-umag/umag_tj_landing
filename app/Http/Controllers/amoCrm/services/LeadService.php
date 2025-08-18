<?php

namespace App\Http\Controllers\amoCrm\services;

use App\AmocrmIntegration;
use App\City;
use App\Http\Controllers\amoCrm\components\CurlTransport;
use App\QueryLogs;
use Illuminate\Support\Facades\Log;
use \DB;

class LeadService
{
    public static function addLead(string $cityCode, string $dealName, string $note, string $phone, string $city) {
        $integration = AmoCrm::getIntegration($cityCode);
        Log::debug('addLead Request', ['cityCode' => $cityCode, 'phone' => $phone]);

        Log::debug('$integrationlEADsERVICE'.json_encode($integration));
        if (!$integration) {
            throw new \Exception('AmoCrm integration not found', 4001);
        }

        $urlEvents = $integration->domain . 'api/v4/events';
        $url = $integration->domain . 'api/v4/leads';
        $token = $integration->token->access_token;
        $headers = [
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        ];

        $requestBody = [
            [
                'name' => $dealName,
                'custom_fields_values' => [
                    [
                        "field_code" => "REFERER",
                        "values" => [
                            [
                                "value" => "umag.kz"
                            ]
                        ]
                    ],
                    [
                        "field_id" => 2814849,
                        "values" => [
                            [
                                "value" => $city
                            ]
                        ]
                    ],
                    [
                        "field_id" => 2822475,
                        "values" => [
                            [
                                "value" => $phone
                            ]
                        ]
                    ]
                ],
            ],
        ];
        Log::debug('test'.json_encode($integration));

        $curl = new CurlTransport();

//        $leadEvents = $curl->send($urlEvents, $headers);

        $leadResponse = $curl->send($url, $headers, $requestBody);
        Log::debug('$leadResponse'.json_encode($leadResponse));

        if ($curl->responseCode == 401) {
            $message = $curl->errorMessage ?: 'Error with token';
            AmoCrm::updateSendStatus($integration->id, 2);
            throw new \Exception($message, 4002);
        }
        if ($curl->responseCode == 402) {
            $message = $curl->errorMessage ?: 'Error with subscriptions';
            AmoCrm::updateSendStatus($integration->id, 3);
            throw new \Exception($message, 4002);
        }


        $leadId = (int)$leadResponse['_embedded']['leads'][0]['id'] ?? null;

        if (!$leadId) {
            $message = $curl->errorMessage ?: 'Error to create lead';
            throw new \Exception($message, 4002);
        }

        self::addNote($integration, $leadId, $note);

        self::updateAmocrmIntegrationModel($integration, 1);
        if (!AmoCrm::getIntegrationModel($cityCode)) {
            self::resetSendStatusForAmocrmIntegrationModel($cityCode);
        }

        $logs = new QueryLogs();

        $logs->name = $integration->name;
        $logs->city_id = (string)$integration->city_id;
        $logs->domain = $integration->domain;
        $logs->phone = $phone;

        $logs->save();

        return true;
    }

    public static function addLeadById(string $intId, string $dealName, string $note, string $phone, string $city) {
        $integration = AmoCrm::getIntegration($intId, true);
        if (!$integration) {
            throw new \Exception('AmoCrm integration not found', 4001);
        }

        $urlEvents = $integration->domain . 'api/v4/events';
        $url = $integration->domain . 'api/v4/leads';
        $token = $integration->token->access_token;
        $headers = [
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        ];

        $requestBody = [
            [
                'name' => $dealName,
                'custom_fields_values' => [
                    [
                        "field_code" => "REFERER",
                        "values" => [
                            [
                                "value" => "umag.kz"
                            ]
                        ]
                    ],
                    [
                        "field_id" => 2814849,
                        "values" => [
                            [
                                "value" => $city
                            ]
                        ]
                    ],
                    [
                        "field_id" => 2822475,
                        "values" => [
                            [
                                "value" => $phone
                            ]
                        ]
                    ]
                ],
            ],

        ];
//        Log::debug('test', $integration);

        $curl = new CurlTransport();

        $leadEvents = $curl->send($urlEvents, $headers);
        Log::debug('$leadEvents', ['$leadEvents' => $leadEvents, '$curl' => $curl]);
        if (isset($leadEvents['status'])) {
            if ($leadEvents['status'] == 401) {
                $message = $curl->errorMessage ?: 'Error with token';
                AmoCrm::updateSendStatus($integration->id, 2);
                throw new \Exception($message, 4002);
            }
            if ($leadEvents['status'] == 402) {
                $message = $curl->errorMessage ?: 'Error with subscriptions';
                AmoCrm::updateSendStatus($integration->id, 3);
                throw new \Exception($message, 4002);
            }
        }

        $leadResponse = $curl->send($url, $headers, $requestBody);

        $leadId = (int)$leadResponse['_embedded']['leads'][0]['id'] ?? null;

        if (!$leadId) {
            $message = $curl->errorMessage ?: 'Error to create lead';
            throw new \Exception($message, 4002);
        }

        self::addNote($integration, $leadId, $note);

        $logs = new QueryLogs();

        $logs->name = $integration->name;
        $logs->city_id = $integration->city_id;
        $logs->domain = $integration->domain;
        $logs->phone = $phone;

        $logs->save();

        return true;
    }


    public static function addNote($integration, int $entityId, string $note)
    {
        if (!$integration) {
            throw new \Exception('AmoCrm integration not found');
        }

        Log::debug('addNote', ['$integration' => $integration, '$entityId' => $entityId, '$note' => $note]);

        $url = $integration->domain . 'api/v4/leads/notes';
        $token = $integration->token->access_token;

        $headers = [
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        ];

        $requestBody = [
            [
                "entity_id" => $entityId,
                "note_type" => "common",
                "params" => [
                    "text" => $note
                ]
            ]
        ];

        $curl = new CurlTransport();
        $noteResponse = $curl->send($url, $headers, $requestBody);
        Log::debug('$noteResponse', ['$noteResponse' => $noteResponse, '$headers' => $headers, '$requestBody' => $note]);
        $noteId = $noteResponse['_embedded']['notes'][0]['id'];
        if (!$noteId) {
            $message = $curl->errorMessage ?: 'Error to create note, leadId = ' . $entityId;
            throw new \Exception($message, 4003);
        }

        return $noteResponse;
    }

    protected static function updateAmocrmIntegrationModel(AmocrmIntegration $model, int $status): bool {
        $model->send_status = $status;
        Log::debug('$model', ['a' => $model]);
        return $model->save();
    }

    protected static function resetSendStatusForAmocrmIntegrationModel(string $cityCode) {
        return AmocrmIntegration::select('amocrm_integrations.*')
            ->join('cities', 'cities.id', '=', 'amocrm_integrations.city_id')
            ->where('cities.code', $cityCode)
            ->where('send_status', 1)
            ->update(['send_status' => 0]);
    }

}
