<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eqhtml extends Model
{
    protected $table = 'eq_text';
    protected $attributes = [
        'html' => "",
    ];
    public $timestamps = false;
}
