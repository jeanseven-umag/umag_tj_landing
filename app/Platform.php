<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    //
    public static function where(string $string, $id)
    {


    }

    public function post() {
        return $this->hasOne('App\Post');
    }
    
    public function faq() {
        return $this->hasOne('App\Faq');
    }

    public function video() {
        return $this->hasOne('App\Video');
    }

    public function category() {
        return $this->hasOne('App\Category');
    }
}
