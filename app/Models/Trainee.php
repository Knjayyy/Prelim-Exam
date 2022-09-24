<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    public function users() {
        return $this->belongsTo('App\Models\User');
    }
    public function courses() {
        return $this->belongsTo('App\Models\Course');
    }
}
