<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\compny;
use App\Models\person;

class relationController extends Controller
{
    //
    function oneToOne()
    {
        //one employee with only one company
        $data = compny::find('1')->empData;
        return view('oneToOne', ['data' => $data]);
    }
    function oneToMany()
    {
        //one company can have many employees
        $data = compny::find('1')->getemp()->get(['e_name', 'id', 'compny_id']);
        //this query will be performed
        //"select `e_name`, `id`, `c_name` from `employees` where `employees`.`compny_id` = 1 and `employees`.`compny_id` is not null";
        //$data = compny::find('1')->getemp;
        //return $data;
        return view('oneToMany', ['list' => $data]);
    }
    function manyToMany()
    {
        $data = person::find('1')->getroles;
        //return $data;
        return view('manyToMany', ['list' => $data]);
    }
}