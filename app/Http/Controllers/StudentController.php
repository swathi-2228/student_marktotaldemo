<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // Calculate total
        $total = $request->mark1 + $request->mark2 + $request->mark3;

        Student::create([
            'name' => $request->name,
            'course' => $request->course,
            'phone' => $request->phone,
            'email' => $request->email,
            'mark1' => $request->mark1,
            'mark2' => $request->mark2,
            'mark3' => $request->mark3,
            'total' => $total
        ]);

        return redirect('/students')->with('success', 'Student Added');
    }
}