<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	/*show dashboard page after login using get request of '/' */
	public function dashboard() 
	{
		return view('backends.index');
	}
}
