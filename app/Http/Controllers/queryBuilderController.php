<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryBuilderController extends Controller
{
    //
    function index(Request $req)
    {
        $whole_data = DB::table('model_damos')->get();
        $data = DB::table('model_damos')->where('name', 'Bansi')->get();
        $find = (array) DB::table('model_damos')->find('4');
        $count = DB::table('model_damos')->count();
        $insert = DB::table('model_damos')->insert([
            'name' => 'Neel',
            'number' => '12234456'
        ]);
        $sum = DB::table('model_damos')->sum('id');
        //$delete = DB::table('model_damos')->where('id', '4')->delete();

        return $sum;
    }
}