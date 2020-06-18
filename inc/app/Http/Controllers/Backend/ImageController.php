<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\Media;
use Illuminate\Support\Facades\Auth;


class ImageController extends Controller
{
    /*show form of add new image*/
    public function index()
    {
        $images = Media::all();
    	return view('backends.image.create', compact('images'));
    }

    /*store new Image*/
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|min:2',
            'content' => 'required|image'
        ]);

        try {

            $img_url = "";
            if ($request->hasFile('content')) {
                $files = $request->file('content');
                $extension = $request->file('content')->getClientOriginalExtension();
                $name = 'upload_' . time() . Auth::id() . '.' . $extension;
                $destinationPath = 'assets/uploads/images';
                $files->move($destinationPath, $name);
                $img_url = $destinationPath. "/" .$name;
            } else {
                session()->flash('type', 'danger');
                session()->flash('message', 'Something Went Wrong...');
                return redirect()->back()->withInput();
            }
            
	    	$image = new Media();
	    	$image->title = $request->title;
			$image->image = $img_url;
	    	$image->status = 1;
	    	$image->created_at = Carbon::now();
	    	$image->created_by = Auth::id();
	    	$image->save();

	    	session()->flash('type', 'success');
			session()->flash('message', 'image Added Successfully...');
			return redirect()->route('backend.image.index');

    	} catch (\Exception $e) {
    		session()->flash('type', 'danger');
    		session()->flash('message', 'Something Went Wrong!');
    		return redirect()->back()->withInput();
    	}
    }


    /*show menu liss*/
    public function create()
    {
    	$images = Media::all();
    	return view('backends.image.list', compact('images'));
    }


    /*show menu details*/
    public function show($id)
    {
    	$image = Media::where('id', $id)->first();
    	if(!empty($menu)) {
	    	return view('backends.image.show', compact('image'));
	    } else {
	    	session()->flash('type', 'danger');
    		session()->flash('message', 'Invalid Image!');
    		return redirect()->back();
	    }
    }
}
