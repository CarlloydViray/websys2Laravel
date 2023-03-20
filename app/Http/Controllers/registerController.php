<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    function register(Request $req)
    {
        return view('information', ['name' => $req->input('name'), 'sex' => $req->input('sex'), 'age' => $req->input('age'), 'bday' => $req->input('bday'), 'civilStat' => $req->input('civilStat')]);
        // return $req -> input();
    }
}