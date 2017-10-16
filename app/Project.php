<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;
use App\Risk;

class Project extends Model
{
    //
    public function tasks(){
        return $this->hasMany('App\Task');
    }

    public function risks(){
        return $this->hasMany('App\Risk');
    }
}
