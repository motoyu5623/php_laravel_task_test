<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    public function Area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function routes(){
        return $this->belongsToMany('App\Models\Route');
    }
}
