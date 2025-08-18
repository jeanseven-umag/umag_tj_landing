<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eqmodel extends Model{
    protected $table = 'eq';
    public $timestamps = false;

    protected $attributes = [
        'name' => "",
        'price' => "",
        'sale' => "",
        'url' => "",
        'image' => "",
        'type_id' => 1,
        'descrip' => "",
        'video' => "",
        'rgx' => ""
    ];

    public function types() {
        return $this->belongsToMany('App\Eqtype', 'eq', 'id', 'type_id'); //второй аргумент имя связной таблицы
    }
    public function htmls() {
        return $this->hasOne('App\Eqhtml', 'eq_id', 'id'); //второй аргумент имя связной таблицы
    }
}
