<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\_member;

class accessorController extends Controller
{
    //
    function index()
    {
        $list = _member::all();
        //return $list;
        return view('accessor', ['data' => $list]);
    }
    function mutator(Request $req)
    {

        $member = new _member;
        $member->name = $req->name;
        $member->number = $req->input('number');
        $member->save();
        return 'Data Inserted';
    }
}