<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function Category(){
        return $this->belongsTo('App\Models\Category','request_category_id','id');
    }
}
