<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KnowledgeBase extends Model
{

    protected $table = 'knowledge_base';

    public function category() {
        return $this->hasOne('App\Category');
    }

    public function platform() {
        return $this->hasOne('App\Platform');
    }
}
