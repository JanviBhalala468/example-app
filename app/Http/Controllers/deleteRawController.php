<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\_member;
use App\Mail\MailOnDelete;
use Illuminate\Support\Facades\Mail;

class deleteRawController extends Controller
{
    //
    function list()
    {
        //return _member::find(1)->full_name;
        return view('deleteRaw', ['data' => _member::all()]);
    }
    function Delete($id)
    {
        $data = _member::find($id);
        $data->delete();
        return redirect(url()->previous());
    }
    function Edit($id)
    {
        $data = _member::find($id);
        return view('saveInDB', ['data' => $data]);
    }
    function EditData(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'number' => 'required'
        ]);
        $data = _member::find($req->id);
        $data->preventAttrSet = true;
        $data->name = $req->name;
        $data->number = $req->number;
        $data->save();
        return redirect('datatableController');
    }
    function DeleteAjax($id)
    {

        $data = _member::find($id);
        $result = $data->delete();
        if ($result) {

            return "Data Deleted";
        } else {
            return "try again";
        }
    }
    public function deletedMethod()
    {
        //
        $details = [
            'subject' => 'new App function',
            'body' => 'This is for testing email using queue'
        ];
        $recipientEmail = 'janvibhalala15@gmail.com';
        $email = new MailOnDelete($details);

        // Push the email sending task onto the Redis queue
        // dispatch(function () use ($recipientEmail, $email) {
        Mail::to($recipientEmail)->queue($email);
        dd('done');
        // });

    }
    function fullNameBtn($id)
    {
        return _member::find($id)->full_name;
        //return "hello";
    }
}