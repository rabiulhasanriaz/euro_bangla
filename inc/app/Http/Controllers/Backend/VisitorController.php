<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Visitor;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = Visitor::all();
    	return view('backends.visitor.list', compact('visitors'));
    }

    /*show student details*/
    public function show($id)
    {
    	$visitor = Visitor::where('id', $id)->first();
    	if(!empty($visitor)) {
	    	return view('backends.visitor.show', compact('visitor'));
	    } else {
	    	session()->flash('type', 'danger');
    		session()->flash('message', 'Invalid Visitor!');
    		return redirect()->back();
	    }
    }
}
