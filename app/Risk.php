<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;

class Risk extends Model
{
    //
    public function project(){
        return $this->belongsTo('App\Project');
    }
}
