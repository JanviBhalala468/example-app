<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class product extends Model
{
    use HasFactory;
    public $table = "products";
    public $timestamps = false;
    public function addDate($days)
    {
        $current = Carbon::create($this->ex_date);
        $this->ex_date = $current->addDays($days);
    }
}