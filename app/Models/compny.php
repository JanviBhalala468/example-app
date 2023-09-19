<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compny extends Model
{
    use HasFactory;
    function empData()
    {
        return $this->hasOne('App\Models\employee');
    }
    function getemp()
    {
        return $this->hasMany('App\Models\employee');
    }
}