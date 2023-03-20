<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function display(){
        return view('student', ['name1' => "Carlloyd", 'name2' => "Viray"]);
    }

    //using with function

    public function displayId($id){
        return view('student') ->with('id', $id);
    }

}
