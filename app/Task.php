<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
use App\User;

class Task extends Model
{
    //
    public function project(){
        return $this->belongsTo('App\Project');
    }
    
    public function users(){
        return $this->belongsToMany('App\User');
    }

  
}
