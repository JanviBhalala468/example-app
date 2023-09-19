<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserDB extends Controller
{
    function index(Request $req)
    {
        $data = DB::select('SELECT * FROM test');
        return view('userDB', ['data' => $data]);
        //return view('users', ['array' => $data], ['user' => 'janvi']);
    }
}