<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\employee;
use App\Models\_member;


class dummyAPIController extends Controller
{
    //
    function index($id = null)
    {
        //return ['name' => 'Prutha'];
        return $id ? employee::find($id) : employee::all();
    }
    function post(Request $r)
    {
        $member = new _member;
        $member->name = $r->name;
        $member->number = $r->number;
        $result = $member->save();
        if ($result) {
            $status
                = "done";
        } else {
            $status = "please try again";
        }
        return ['result' => $status];
    }
    function update(Request $req)
    {
        $member = _member::find($req->id);
        $req->name ? $member->name = $req->name : $member->name;
        $req->number ? $member->number = $req->number : $member->number;
        $result = $member->save();
        if ($result) {
            $status
                = "done";
        } else {
            $status = "please try again";
        }
        return ['result' => $status];
    }
    function delete($id)
    {
        $member = _member::find($id);
        $result = $member->delete();
        if ($result) {
            $status
                = "done";
        } else {
            $status = "please try again";
        }
        return ['result' => $status];
    }
    function search($s)
    {
        return _member::where('name', 'LIKE', "%" . $s . '%')->get();

    }
    function validatee(Request $r)
    {
        $rules = array('name' => 'required');
        $validator = Validator::make($r->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            $member = new _member;
            $member->name = $r->name;
            $member->number = $r->number;
            $result = $member->save();
            if ($result) {
                $status
                    = "done";
            } else {
                $status = "please try again";
            }
            return ['result' => $status];
        }

    }
    function uploadMe(Request $req)
    {
        return $req->file('file')->store('apiDocs');
    }
}