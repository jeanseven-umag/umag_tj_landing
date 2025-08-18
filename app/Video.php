<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    public static function where(string $string, $id)
    {


    }

    public function category() {
        return $this->hasOne('App\Category');
    }

    public function platform() {
        return $this->hasOne('App\Platform');
    }
}
