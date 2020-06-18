<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Institution;

class InstituteController extends Controller
{
    public function index()
    {
        $institutes = Institution::all();
    	return view('backends.institute.list', compact('institutes'));
    }

    /*show Institute details*/
    public function show($id)
    {
    	$institute = Institution::where('id', $id)->first();
    	if(!empty($institute)) {
	    	return view('backends.institute.show', compact('institute'));
	    } else {
	    	session()->flash('type', 'danger');
    		session()->flash('message', 'Invalid Institute!');
    		return redirect()->back();
	    }
    }
}
