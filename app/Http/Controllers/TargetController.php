<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eqtype;

class TargetController extends Controller
{

    public function index($tag){
        return view('pages.target-form', ['tag' => $tag]);
    }

}
