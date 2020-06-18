<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller 
{

	/*show login form uesing get request /login*/
	public function showLoginForm() 
	{
		return view('backends.login');
	}

	/*process login form of /login request using post method*/
	public function processLogin(Request $request) 
	{
		//dd($request->all());
		/*validate request*/
		$request->validate([
			'username' => 'required|email',
			'password' => 'required'
		]);

		/*find user*/
		$user = User::where('email', $request->username)->first();

		if(!empty($user)) {
			if(Hash::check($request->password, $user->password)) {
				Auth::login($user);
				return redirect()->route('backend.dashboard');
			} else{
				session()->flash('type', 'danger');
				session()->flash('message', 'Invalid Email or Password!');
				return redirect()->back();
			}
		} else {
			session()->flash('type', 'danger');
			session()->flash('message', 'Invalid Email or Password!');
			return redirect()->back();
		}
	}


	/*logout a user*/ 
	public function logout()
	{
		Auth::logout();
		return redirect()->route('login');
	}
}