<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 'code',
    ];

    public function integration()
    {
        return $this->belongsTo(AmocrmIntegration::class);
    }
}
