<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function Client(){
        return $this->belongsTo('App\Models\Client');
    }

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function Status(){
        return $this->belongsTo('App\Models\Status');
    }

    public function Inspection(){
        return $this->hasOne('App\Models\Inspection','id','inspection_id');
    }

    public function Category(){
        return $this->hasOne('App\Models\Category','id','category_id');
    }
}
