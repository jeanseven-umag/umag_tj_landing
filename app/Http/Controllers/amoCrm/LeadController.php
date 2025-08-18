<?php

namespace App\Http\Controllers\amoCrm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\amoCrm\services\AmoCrm;
use App\Http\Controllers\amoCrm\services\LeadService;
use App\Http\Controllers\amoCrm\components\CurlTransport;

class LeadController extends Controller
{
    public function leads() {
        $integration = AmoCrm::getIntegration('ALA');
        if (!$integration) {
            throw new \Exception('AmoCrm integration not found');
        }

        $url = $integration->domain . 'api/v4/leads';
        $token = $integration->token->access_token;

        $headers = [
            'Authorization: Bearer ' . $token,
            'Accept: application/json'
        ];

        $curl = new CurlTransport();
        $response = $curl->send($url, $headers);

        return $response;
    }

    /**
     * @param Request $request
     * @return mixed|string
     * @throws \Exception
     */
    public function addLead(Request $request) {
        $request->validate([
            'city_code' => 'required|max:3',
            'deal_name' => 'required|max:225',
            'note' => 'required'
        ]);
        $cityCode = $request->city_code;
        $dealName = $request->deal_name;
        $note = $request->note;

        return LeadService::addLead($cityCode, $dealName, $note);
    }
}
