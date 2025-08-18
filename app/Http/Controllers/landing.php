<?php

namespace App\Http\Controllers;
use \DB;

use Illuminate\Http\Request;

class landing extends Controller
{
    public function index(){
        $visit_count = DB::table('a_b')->where('id', "1")->value('visit_count');
        $active = DB::table('a_b')->where('id', "1")->value('active');
        $text1 = 'предложение, которое ты ждал <br> <span class="light_parag">только сегодня</span>';
        $text2 = 'ограниченное предложение <br/> для тебя';
        $current = null;
        if($active == 0){
            $current = $text1;
        }else{
            $current = $text2;
        }
        return view('pages.homeclone', [
            'text' => $current,
            'visit' => $visit_count
        ]);
    }
    public function ajax(Request $request){
        if($request->met=="visit"){
            $this->update_data();
            echo 'success';
        }
    }
    public function update_data(){
        $visit_count = DB::table('a_b')->where('id', "1")->value('visit_count');
        if($visit_count%2==0){
            DB::table('a_b')->where('id', "1")->update(['active' => 1]);    
        }else{
            DB::table('a_b')->where('id', "1")->update(['active' => 0]);
        }
        $visit_count++;
        DB::table('a_b')->where('id', "1")->update(['visit_count' => $visit_count]);
    }
}
