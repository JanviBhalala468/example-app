<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\_member;
use Yajra\DataTables\DataTables;

class datatableController extends Controller
{
    //
    function index(Request $request)
    {
        if ($request->ajax()) {
            $data = _member::latest()->get();
            return Datatables::of($data)

                ->make(true);
        }
        return view('datatable');
    }
}