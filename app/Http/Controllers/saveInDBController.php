<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\_member;

class saveInDBController extends Controller
{

    //
    function getData(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'number' => 'required'
        ]);
        $member = new _member;
        $member->name = $req->name;
        $member->number = $req->input('number');
        $member->save();
        return redirect('deleteRawController');
    }
}