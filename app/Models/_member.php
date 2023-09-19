<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _member extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $preventAttrSet = false;
    protected $fillabel = ['name', 'number'];
    public function getFullNameAttribute($value)
    {
        //return ucfirst($value);
        return $this->name . $this->number;
    }
    public function setNameAttribute($value)
    {

        if ($this->preventAttrSet) {
            // Ignore Mutator
            $this->attributes['name'] = $value;
        } else {
            return $this->attributes['name'] = "Mr/Ms. " . $value;
        }
    }

}