<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    function getData(Request $req)
    {
        $req->validate([
            'uname' => 'required',
            'psw' => 'required | min:8'
        ]);
        $data = $req->input('uname');
        $req->session()->put('user', $data);
        //echo session('user');
        return redirect('welcomPage');
    }
    //
}