<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelDamo;

class modelDamoController extends Controller
{
    //
    function getData()
    {
        return view('modelDamo', ['data' => modelDamo::all()]);
    }
    function paginate()
    {
        $list = modelDamo::paginate(3);
        return view('pagination', ['data' => $list]);
        //return modelDamo::all();
    }
}