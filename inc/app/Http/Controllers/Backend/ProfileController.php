<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
	/*show profile information*/
    public function showProfile()
    {
    	return view('backends.profile.profile');
    }

    /*show edi page of profile information*/
    public function editProfile()
    {
    	return view('backends.profile.edit');
    }

    /*update/save profile information*/ 
    public function updateProfile(Request $request)
    {
    	/*validate request input fields*/
    	$request->validate([
    		'name' => 'required|min:3',
    		'email' => 'required|email|unique:users,email,'.Auth::id()
    	]);
    	try {
    		$user = Auth::user();
	    	$user->name = $request->name;
	    	$user->email = $request->email;

	    	$user->save();
    	} catch (\Exception $e) {
    		session()->flash('type', 'danger');
    		session()->flash('message', 'Something Went Wrong!');
    		return redirect()->back();
    	}
    	
		session()->flash('type', 'success');
    	session()->flash('message', 'Profile Updated Successfully');
    	return redirect()->back();
    }


    /*show change-password form*/
    public function showChangePasswordForm()
    {
    	return view('backends.profile.change_password');
    }

    /*process change-password form*/
    public function processChangePasswordForm(Request $request)
    {
    	$request->validate([
    		'old_password' => 'required',
    		'password' => 'required|min:6|confirmed',
    		'password_confirmation' => 'required|same:password'
    	]);

    	try {
    		if (Hash::check($request->old_password, Auth::user()->password)) {
    			
    			$user = Auth::user();
    			$user->password = bcrypt($request->password);

    			$user->save();

	    	} else {
	    		session()->flash('type', 'danger');
	    		session()->flash('message', 'Invalid Old Password!');
	    		return redirect()->back();
	    	}
    	} catch (\Exception $e) {
    		session()->flash('type', 'danger');
    		session()->flash('message', 'Something Went Wrong!');
    		return redirect()->back();
    	}

    	session()->flash('type', 'success');
    	session()->flash('message', 'Password Changed Successfully');
    	return redirect()->back();
    }
}
