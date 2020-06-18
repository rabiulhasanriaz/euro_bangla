<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
    	return view('backends.student.list', compact('students'));
    }

    /*show student details*/
    public function show($id)
    {
    	$student = Student::where('id', $id)->first();
    	if(!empty($student)) {
	    	return view('backends.student.show', compact('student'));
	    } else {
	    	session()->flash('type', 'danger');
    		session()->flash('message', 'Invalid Student!');
    		return redirect()->back();
	    }
    }
}
