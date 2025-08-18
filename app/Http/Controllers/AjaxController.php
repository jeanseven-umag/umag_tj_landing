<?php

namespace App\Http\Controllers;

use App\Companies;
use App\Http\Controllers\amoCrm\services\AmoCrm;
use App\Http\Controllers\amoCrm\services\LeadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator; 

class AjaxController extends Controller
{

    public function index(Request $request)
    {
        if (isset($request->tag)) {
            $this->sendToTelegram($request);
            return;
        }

        $result = ['status' => false];
        $cityCode = $request->id ?? $request->city ?? '';
        $dealName = $request->type ?? 'Заявка';
        $phone = $request->phone;
        $note = 'Город: ' . ($request->region ?? null) . PHP_EOL;
        $note .= 'Номер телефона: ' . ($request->phone ?? null) . PHP_EOL;
        if (isset($request->name)) {
            $note .= "Клиент:" . ($request->name ?? null) . PHP_EOL;;
        }
        if (isset($request->message)) {
            $note .= "Сообщение:" . ($request->message ?? null) . PHP_EOL;;
        }

        $cacheKey = preg_replace('/[^0-9]/', '', $request->phone);
        $cacheValue = $request->phone;
        $cacheDuration = now()->addDay();

        try {
            if (!Cache::get($cacheKey)) {
                Cache::put($cacheKey, $cacheValue, $cacheDuration);

                if (!isset($request->id)) {
                    $leadResult = LeadService::addLead($cityCode, $dealName, $note, $request->phone, $request->region ) ?? false;
                } else {
                    $leadResult = LeadService::addLeadById($request->id, $dealName, $note, $request->phone, $request->region ) ?? false;
                }
                $result['status'] = (bool)$leadResult;
                return response()->json($result);
            } else {
                return response()->json(['message' => 'Этот номер ранее был уже отправлен'], 402);
            }
        } catch (\Exception $e) {
            Log::debug('sendToTelegram', ['request' => $request, 'Exception' => $e]);
            return $this->sendToTelegram($request);
        }

    }

    private function sendToTelegram($resp)
    {
        $name = $resp->name ?? "Не указано";
        $phone = $resp->phone;
        $region = $resp->region;
        $id = $resp->id;
        $token = '1529302394:AAF5M-umYsWzCXwOLVHUwHH7inWAhn42Hls';
        $chatID = '-1001421151864'; // -1001411457814 902155177
        $tag = $resp->tag;
        if ($region == '' || $region == false || !$region) {
            $token = '5361746041:AAEgwquXxayYBLcy3qQ7FjXcVBCNZIxdAik';
            $chatID = '473457669';
        }
        $telegramMessage = "<b>" . $resp->type . "</b>\n";

        if ($tag) {
            $telegramMessage .= "Тег: <b>" . $tag . "</b>\n";
        }
        $telegramMessage .= "Клиент: <b>" . $name . "</b>\n";
        if ($id) {
            $comp = Companies::find($id);
            $telegramMessage .= "Компания: <b>" . $comp->name . "</b>\n";
        }
        $telegramMessage .= "Телефон: <b>" . $phone . "</b>\n";
        $telegramMessage .= "Город: <b>" . $region . "</b>\n";
        if ($resp->message) {
            $telegramMessage .= "Сообщение: <b>" . $resp->message . "</b>\n";
        }
        $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
        $url .= "&text=" . urlencode($telegramMessage);
        $url .= "&parse_mode=html";
        $ch = curl_init();
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);
        echo json_encode($result);
    }

    //new method
    public function store(Request $request)
    {
        //\Log::info('Form Data:', $request->all()); 
        // Validate input data
        $validator = Validator::make($request->all(), [
            'city' => 'required|string',
            //'phone' => 'required|regex:/^(\+7)[0-9]{10}$/', // Adjust as per phone format requirement
        ]);
        
        // // If validation fails, redirect back with errors
        if ($validator->fails()) {
            
            //return back()->withErrors($validator)->withInput();
            return response()->json(['errors' => $validator->errors()], 422);
        }
        
        // Prepare the result status
        $result = ['status' => false];
        
        // Gather the necessary data from the request
        $cityCode = $request->id ?? $request->city ?? '';
        $dealName = $request->type ?? 'Заявка';
        $phone = $request->phone;
        
        // Prepare the note details
        $note = 'Город: ' . ($request->region ?? 'Не указан') . PHP_EOL;
        $note .= 'Номер телефона: ' . ($request->phone ?? 'Не указан') . PHP_EOL;
        
        if (isset($request->name)) {
            $note .= 'Клиент: ' . $request->name . PHP_EOL;
        }
        if (isset($request->message)) {
            $note .= 'Сообщение: ' . $request->message . PHP_EOL;
        }
        
        // Generate cache key based on phone number
        $cacheKey = preg_replace('/[^0-9]/', '', $request->phone);
        $cacheValue = $request->phone;
        $cacheDuration = now()->addDay();

        try {
            // Check if the phone number is already cached (previous submission)
            if (!Cache::get($cacheKey)) {
                Cache::put($cacheKey, $cacheValue, $cacheDuration);

                // Add lead based on the presence of 'id'
                if (!isset($request->id)) {
                    $leadResult = LeadService::addLead($cityCode, $dealName, $note, $request->phone, $request->city) ?? false;
                } else {
                    $leadResult = LeadService::addLeadById($request->id, $dealName, $note, $request->phone, $request->city) ?? false;
                }
                
                // If lead is successfully added, return a success message
                // if ($leadResult) {
                //     return redirect()->route('success')->with('success', 'Заявка успешно отправлена!');
                // }
                if ($leadResult) {
                    return response()->json(['message' => 'Заявка успешно отправлена!'], 200);
                }
            } else {
                // Phone number was previously submitted, return an error
                return redirect()->back()->withErrors(['phone' => 'Этот номер ранее был уже отправлен']);
            }
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error('Form Submission Error', ['request' => $request, 'Exception' => $e]);

            // Return an error message
            //return redirect()->back()->withErrors(['error' => 'Произошла ошибка при обработке запроса. Попробуйте позже.']);
            return response()->json(['error' => 'Произошла ошибка при обработке запроса. Попробуйте позже.'], 500);
        }

        // Return if any unexpected failure
        //return redirect()->back()->withErrors(['error' => 'Не удалось обработать заявку.']);

        return response()->json(['error' => 'Не удалось обработать заявку.'], 500);
    }

}
