<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Controllers\Controller;
use App\Models\employees;
use Symfony\Component\Console\Input\Input;

class employeesController extends Controller
{
    public function index()
    {
        $employee = employees::all();
        return view('/employeesView', compact('employee'));
    }

    public function create()
    {
        // $info = employees::create([
        //     'name' => 'Carlloyd Viray',
        //     'position' => 'Student 3',
        // ]);
        // echo "The record has been saved";

        return view('/createEmployee');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'position' => 'required',
            ]
        );
        $employee = new employees();
        $employee->name = $request->name;
        $employee->position = $request->position;

        $employee->save();
        return redirect('/employeesView');
    }
}
