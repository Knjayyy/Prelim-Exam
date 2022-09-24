<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainor extends Model
{
    function courses() {
        return $this->hasMany('App\Models\Course');
    }
    public function users() {
        return $this->belongsTo('App\Models\User'); 
    }
}
