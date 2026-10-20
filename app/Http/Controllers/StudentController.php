<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $student = new Student();
        $student->name = request('name');
        $student->email = request('email');
        $student->phone = request('phone');
        $student->department = request('department');
        $student->age = request('age');
        $student->save();
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $student = Student::findOrFail($id);
        $student->name = request('name');
        $student->email = request('email');
        $student->phone = request('phone');
        $student->department = request('department');
        $student->age = request('age');
        $student->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/students');
    }
}
