<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joinController extends Controller
{
    //
    function index(Request $req)
    {
        $data = DB::table('join_employee')->join('join_company', 'join_employee.company_id', "=", 'join_company.id')
            ->select('join_employee.name', 'join_employee.company_id', 'join_company.name AS c_name')
            ->get();
        ///return $data;
        return view('join', ['data' => $data]);
    }
}