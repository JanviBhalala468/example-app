<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class flashSessionController extends Controller
{
    //
    function getData(Request $req)
    {
        $req->validate([
            'uname' => 'required',
            'psw' => 'required',
            'email' => 'required'
        ]);
        $data = $req->input('uname');
        $req->session()->flash('user', $data);
        return redirect('flashSession');
    }
}