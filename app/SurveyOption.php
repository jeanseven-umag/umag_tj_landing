<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyOption extends Model
{
    protected $fillable = ['survey_id', 'option_text'];

    public function survey()
    {
        return $this->belongsTo('App\Survey');
    }
}
