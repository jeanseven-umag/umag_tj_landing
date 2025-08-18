<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class Ajaxtest extends Controller
{
    public function index(Request $request) {
    
     $this->amo_request($request);
   }
   public function db_data($city){
      $ala = ["ALA", "TAL", "UKK", "KAR"];
      $ast = ["AST", "KOS", "PET", "PAV", "KOK"];
      $cit = ["CIT", "TAR", "KYZ", "ZHE"];
      $akt = ["AKT", "URA", "ATR", "AKU"];
      $sem = ["PLX"];
      $all = [$ala, $ast, $cit, $akt, $sem];
      for($i = 0; $i<count($all); $i++){
          for($j = 0; $j<count($all[$i]); $j++){
              if($all[$i][$j]==$city){
                  $amo_city = $all[$i][0];
                  break;
              }
          }
      }
      $db_data = DB::table('region')->where('regname', $amo_city)->get();
      return $db_data;
   }
   
   public function amo_request($resp){
      $client_name = (!empty($resp->name)) ? $resp->name : "Не указано";
      $client_phone = $resp->phone; 
      $client_city = $resp->city;
      $client_region = $resp->region;
      $client_type = $resp->type;
      $client_message = $resp->message;
      $db_data = $this->db_data($client_city);
      $hash = $db_data[0]->hash;
      $subdomain = $db_data[0]->subdomain;
      $login = $db_data[0]->login;
      $roistat_id = $db_data[0]->roistat_id;
      $google_id = $db_data[0]->google_id;
      $phone_id = $db_data[0]->phone_id;
      $reg_id = $db_data[0]->reg_id;
      $pipeline_id = $db_data[0]->pipeline_id;
      $message_id = $db_data[0]->message_id;
      $crm_id = (date("Y") * date("d") * rand(1, 63));
      $crm_rand = $crm_id*2;
      $sevice_code =  (date("Y") * date("d") * rand(1, 12));
      $send_data = $this->amo_array($client_type, $client_name, $client_phone, $client_message, $client_region, $roistat_id, $crm_id, $crm_rand, $sevice_code, $phone_id, $reg_id, $message_id, $pipeline_id);
      $oldtoken = true;
      $j = 0;
      while($oldtoken){
        $token = DB::table('token')->where('id', "1")->value('access_token');
        $headers_api = [
          'Authorization: Bearer ' . $token,
          'Accept: application/json'
        ];
        $link = 'https://umag.amocrm.ru/api/v2/contacts/?query='.str_replace([' ', '(', ')', '+'], '', $client_phone);
        $result = $this->amo_curl("amoCRM-API-client-undefined/2.0", "", "leadadd", $link, $headers_api);
        if(!isset($result["response"]["error"])){
          $oldtoken = false;
        }else{
          //$this->reftok($token);
          ($j >= 20) ? $oldtoken = false : $j++;
        }
      }
      if($j < 20){
        if( isset( $result['_embedded']['items'][0] ) ){
          	$item = $result['_embedded']['items'][0];
          	foreach ($item["custom_fields"] as $item_cf){
            if($item_cf["name"]=="Телефон"){
              $date = date_create();
              $data = array (
                'add' => 
                array (
                  0 => 
                  array (
                    'name' => $client_type,
                    'created_at' => date_timestamp_get($date),
                    'responsible_user_id' => $item["responsible_user_id"],
                    'contacts_id' => 
                    array (
                      0 => $item["id"],
                    ),
                    'custom_fields' => 
                    array (
                      0 => 
                      array (
                        'id' => '1961557',
                        'values' => 
                        array (
                          0 => 
                          array (
                            'value' => '4693273',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'id' => '2002719',
                        'values' => 
                        array (
                          0 => 
                          array (
                            'value' => $_COOKIE["roistat_visit"],
                          ),
                        ),
                      ),
                      2 => 
                      array (
                        'id' => '2003059',
                        'values' => 
                        array (
                          0 => 
                          array (
                            'value' =>  $client_message,
                          ),
                        ),
                      ),
                      3 => 
                      array (
                        'id' => '2002717',
                        'values' => 
                        array (
                          0 => 
                          array (
                            'value' => '4750877',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              );
              $link = "https://umag.amocrm.ru/api/v2/leads";
              $resultt = $this->amo_curl("amoCRM-API-client-undefined/2.0", http_build_query($data), "leadadd", $link, $headers_api);
              $task_id =  $resultt['_embedded']['items'][0]['id'];
              $today = date("Y/m/d");
              $timeset =  strtotime($today." 15:00");
              $task_data = array (
                'add' => 
                array (
                  0 => 
                  array (
                    'element_id' => $task_id,
                    'element_type' => '2',
                    'complete_till' => $timeset,
                    'task_type' => '1',
                    'text' => 'клиент повторно отправил лид. Позвони узнай че хочет, и хлеба не забудь купить',
                    'responsible_user_id' => $item["responsible_user_id"]
                  ),
                ),
              );
              $link_task = "https://umag.amocrm.ru/api/v2/tasks";
              $result = $this->amo_curl("amoCRM-API-client-undefined/2.0", http_build_query($task_data), "leadadd", $link_task, $headers_api);
            }
          }
        }else{
            $link2 = "https://". $subdomain .".amocrm.ru/api/v2/incoming_leads/form?login=". $login ."&api_key=". $hash ."&";
            $headers = [
              "Accept: application/json"
            ];
            $result = $this->amo_curl("amoCRM-API-client-undefined/2.0", http_build_query($send_data), "", $link2, $headers);
        }
      }else{
        echo "Не удалось обновить токен";
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


   public function amo_curl($useragent, $postfields, $type, $url, $header){
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_USERAGENT, $useragent);
        switch($type){
          case 'reftok':
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
            break;
          case 'leadadd':
            curl_setopt($curl, CURLOPT_COOKIEFILE,dirname(__FILE__)."/cookie.txt");
            curl_setopt($curl, CURLOPT_COOKIEJAR,dirname(__FILE__)."/cookie.txt");
            break;
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_URL, $url);
        if(!empty($postfields)){curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);}
        curl_setopt($curl, CURLOPT_HEADER, false);
        $out = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($out,TRUE);
        return $result;
    }



   public function amo_array($title, $name, $phone, $message, $region, $roistat, $crm_id, $crm_rand, $service_code, $phone_id, $reg_id, $message_id, $pipeline_id){
    $date = date_create();
    $data = array (
         'add' => 
         array (
           0 => 
           array (
             'source_name' => 'umag.kz',
             'source_uid' => $crm_id,
             'created_at' => date_timestamp_get($date),
             'pipeline_id' => $pipeline_id,
             'incoming_entities' => 
             array (
               'leads' => 
               array (
                 0 => 
                 array (
                   'custom_fields' => 
                   array (
                     0 => 
                     array (
                       'id' => $roistat,
                       'values' => 
                       array (
                         0 => 
                         array (
                           'value' => $_COOKIE["roistat_visit"],
                         ),
                       ),
                     ),
                     1 => 
                     array (
                       'id' => '1961557',
                       'values' => 
                       array (
                         0 => 
                         array (
                           'value' => '4693273',
                         ),
                       ),
                     ),
                     2 => 
                      array (
                        'id' => '2002717',
                        'values' => 
                        array (
                          0 => 
                          array (
                            'value' => '4750877',
                          ),
                        ),
                      ),
                   ),
                 ),
               ),
               'contacts' => 
               array (
                 0 => 
                 array (
                   'name' => $name,
                   'custom_fields' => 
                   array (
                     0 => 
                     array (
                       'id' => $phone_id,
                       'values' => 
                       array (
                         0 => 
                         array (
                           'value' => str_replace([' ', '(', ')', '+'], '', $phone),
                           'enum' => 'MOB',
                         ),
                       ),
                     ),
                     1 => 
                     array (
                       'id' => $message_id,
                       'values' => 
                       array (
                         0 => 
                         array (
                           'value' => $message,
                         ),
                       ),
                     ),
                     2 => 
                     array (
                       'id' => $reg_id,
                       'values' => 
                       array (
                         0 => 
                         array (
                           'value' => $region,
                         ),
                       ),
                     ),
                   ),
                 ),
               ),
             ),
             'incoming_lead_info' => 
             array (
               'form_id' => $crm_rand,
               'form_page' => $title,
               'ip' => $_SERVER['REMOTE_ADDR'],
               'service_code' => $service_code,
             ),
           ),
         ),
       );
      return $data;
   }
}