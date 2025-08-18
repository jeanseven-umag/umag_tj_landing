<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
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
    
    public function platform() {
        return $this->hasOne('App\Platform');
    }
}
