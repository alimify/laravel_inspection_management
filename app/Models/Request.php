<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function Type(){
        return $this->belongsTo('App\Models\RequestCategory','request_category_id','id');
    }
}
