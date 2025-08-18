<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $request->work=="var_4" ? $work = $request->custom : $work = $request->wor_name;
        empty($request->comment) ? $comment = "не оставил" : $comment = $request->comment;
        $data = [
            'name' => $request->name,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'region' => $request->region,
            'work' => $work,
            'comment' => $comment,
            'utm_source' =>$request->utm_source
        ];

        $this->mail_lol($data);
    }

    public function mail_lol($data){
        Mail::send('mails.demo_plain', $data, function($message){
            $message->from('franchise@umag.kz', 'umag.kz');
            $message->to('franchise@umag.kz');
            $message->subject("Заявка на франшизу");
        });
    }
}