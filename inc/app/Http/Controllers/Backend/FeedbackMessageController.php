<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\FeedbackMessage;

class FeedbackMessageController extends Controller
{
    public function index()
    {
        $messages = FeedbackMessage::all();
    	return view('backends.feedback.list', compact('messages'));
    }

    /*show feedback details*/
    public function show($id)
    {
    	$message = FeedbackMessage::where('id', $id)->first();
    	if(!empty($message)) {
	    	return view('backends.feedback.show', compact('message'));
	    } else {
	    	session()->flash('type', 'danger');
    		session()->flash('message', 'Invalid Feedback!');
    		return redirect()->back();
	    }
    }
}
