<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sudent;

class StudentController extends Controller
{
    public function index()
    {
      $students = Sudent::all();
      return view('index')->with('students', $students);
    }

    public function create()
    {
      return view('create');
    }

    public function store(Request $request)
    {
      ////insert data form to database
       $student = new Sudent;
       $student->name = $request->name;
        $student->registration_id = $request->registration_id;
         $student->department_name = $request->department_name;
          $student->info = $request->info;
          $student->save();
          return redirect()->route('index');
    }
}
