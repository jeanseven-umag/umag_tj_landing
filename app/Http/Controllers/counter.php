<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class counter extends Controller
{
    public function index(Request $request) {
        if($request->met=="set"){
            $this->update_data($request->count);
        }else{
            $this->data_get();
        }
    }
    public function data_get(){
        echo $db_data = DB::table('counter')->where('id', "1")->value('count');
    }
    function update_data($val){
        DB::table('counter')->where('id', "1")->update(['count' => $val]);
    }
}
