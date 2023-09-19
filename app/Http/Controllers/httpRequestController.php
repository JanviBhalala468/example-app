<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class httpRequestController extends Controller
{
    //
    function getData(Request $req)
    {
        $req->validate([
            'uname' => 'required',
            'psw' => 'required | min:8'
        ]);
        return $req->input();
    }
}