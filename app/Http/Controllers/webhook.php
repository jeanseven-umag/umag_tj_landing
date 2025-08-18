<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class webhook extends Controller
{
    public function index(){
        return view('pages.webhook');
    }

    public function hook(Request $request){
        $json = json_encode($request->all());
        //file_put_contents('./newhooks_'.date("j.n.Y").'.json',  $json, FILE_APPEND);
        $resp_array = json_decode($json, true);
        $status_id = $resp_array["leads"]["status"][0]["status_id"];
        $id = $resp_array["leads"]["status"][0]["id"];
        $last = $resp_array["leads"]["status"][0]["last_modified"];
        if($status_id=='142'){
            $oldtoken = true;
            $j = 0;
            while($oldtoken){
                $token = DB::table('token')->where('id', "1")->value('access_token');
                $today = date("Y/m/d");
                $data = array (
                    'update' => 
                        array (
                            0 => 
                            array (
                                'id' => $id,
                                'updated_at' =>  strtotime($today." 20:00"),
                                'custom_fields' => 
                                array (
                                    0 => 
                                    array (
                                        'id' => '2003929',
                                        'values' => 
                                    array (
                                        0 => 
                                        array (
                                        'value' => date("d.m.Y"),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                );
                $headers_api = [
                  'Authorization: Bearer ' . $token,
                  'Accept: application/json'
                ];
                $link = "https://umag.amocrm.ru/api/v2/leads/";
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
                curl_setopt($curl, CURLOPT_USERAGENT, "amoCRM-API-client-
                undefined/2.0");
                curl_setopt($curl, CURLOPT_HTTPHEADER, $headers_api);
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                curl_setopt($curl, CURLOPT_URL, $link);
                curl_setopt($curl, CURLOPT_HEADER,false);
                curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__)."/cookie.txt");
                curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__)."/cookie.txt");
                $out = curl_exec($curl);
                curl_close($curl);
                $result = json_decode($out,TRUE);
                if(!isset($result["response"]["error"])){
                    $oldtoken = false;
                    $jsonres = json_encode($result);
                    //file_put_contents('./result_'.date("j.n.Y").'.json',  $jsonres, FILE_APPEND);
                }else{
                    $this->reftok($token);
                    ($j >= 20) ? $oldtoken = false : $j++;
                }
            }   
        } 
    }

    public function reftok($old){
        $status = DB::table('token')->where('id', "1")->value('status');
        if($status=="true"){
          DB::table('token')->where('id', "1")->update(['status' => 'false']);
          $reftok = DB::table('token')->where('id', "1")->value('refresh_token');
          $subdomain = 'umag'; //Поддомен нужного аккаунта
          $link = 'https://' . $subdomain . '.amocrm.ru/oauth2/access_token'; //Формируем URL для запроса
          $data = [
              'client_id' => '7a89393a-db62-4377-a534-06f58acf205b',
              'client_secret' => 'wFBiv2IYzEEbUajBKi40jEFFP7DlX9OLz051eKeQPmBfat5rjaBxJ2rpAnxtqCTp',
              'grant_type' => 'refresh_token',
              'refresh_token' => $reftok,
              'redirect_uri' => 'https://umag.kz/',
          ];
          $curl = curl_init();
          curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
          curl_setopt($curl,CURLOPT_URL, $link);
          curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type:application/json']);
          curl_setopt($curl,CURLOPT_HEADER, false);
          curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST');
          curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($data));
          curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
          curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
          $out = curl_exec($curl);
          $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
          curl_close($curl);
          $code = (int)$code;
          $response = json_decode($out, true);
          if(isset($response['access_token'])){
            $access_token = $response['access_token'];
            $refresh_token = $response['refresh_token'];
            DB::table('token')->where('id', "1")->update(['access_token' => $access_token, 'refresh_token' => $refresh_token, 'old' => $old, 'status' => 'true']);
          }else{
            DB::table('token')->where('id', "1")->update(['status' => 'не удалось получить токен '.$code]);
          }
        }
      }
}