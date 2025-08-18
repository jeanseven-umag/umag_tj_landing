<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyResult extends Model
{
    protected $fillable = ['survey_id', 'option_id', 'user_name', 'phone', 'other_option_text', 'link', 'knowledge_base_id'];

    public function survey()
    {
        return $this->belongsTo('App\Survey');
    }

    public function option()
    {
        return $this->belongsTo('App\SurveyOption');
    }
}
