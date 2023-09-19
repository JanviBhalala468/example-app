<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    use HasFactory;
    public function getroles()
    {
        return $this->belongsToMany('App\Models\role', 'App\Models\many1');
    }
}