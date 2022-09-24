<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    function trainors() {
        return $this->hasMany('App\Models\Trainor');
    }
    function trainees() {
        return $this->hasMany('App\Models\Trainee');
    }
}
