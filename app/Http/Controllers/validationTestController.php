<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validationTestController extends Controller
{

    //creating validation
    function regValidate(Request $req)
    {
        $rules = [
            'fname' => 'required|min:4|max:10',
            'lname' => 'required|min:4|max:10',
            'age' => 'required|numeric',
            'bday' => 'required|date_format:Y/m/d',
            'website' => 'required|url',
            'email' => 'required|email',
        ];

        $customMessages = [
            'required' => 'The :attribute field cannot be empty',
            'numeric' => 'Hindi pwede ang mga letra sa input na ito'
        ];
        $this->validate($req, $rules, $customMessages);
            

        return view('validationTestView', ['fname' => $req->input('fname'), 'lname' => $req->input('lname'), 'age' => $req->input('age'), 'bday' => $req->input('bday'), 'website' => $req->input('website'), 'email' => $req->input('email')]);
    }

}
