<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }

    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'score' => $request->score,
        ]);

        return redirect('/');
    }

    public function update(Request $request)
    {
        $student = Student::find($request->id);
        $student->score = $request->score;
        $student->save();

        return redirect('/');
    }

    public function delete(Request $request)
    {
        $student = Student::find($request->id);
        $student->delete();

        return redirect('/');
    }
}
