<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class httpClientController extends Controller
{
    //
    function getApi()
    {
        //return Http::get('https://reqres.in/api/users?page=1');
        return view('httpClient', ['data1' => Http::get('https://reqres.in/api/users?page=1')['data']]);

    }
}