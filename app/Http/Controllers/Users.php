<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    function viewLoad()
    {
        $data = ['janvi', 'prutha', 'pooja'];
        return view('users', ['array' => $data], ['user' => 'janvi']);
        //return "hello";
    }
}