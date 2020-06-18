<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\ConfigMenu;
use App\Models\ConfigSubMenu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Media;

class MenuController extends Controller
{

    /*show form of create new company*/
    public function create()
    {
		$images = Media::all();
    	return view('backends.menu.create', compact('images'));
    }

    /*store new Menu*/
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|min:3|unique:config_menus,title'
        ]);

        try {
			$slug = Str::slug($request->title);
			do {
				$again = true;

				$menu = false;
				$sub_menu = false;

				$check_slug = ConfigMenu::where('slug', $slug)->first();
				if(!empty($check_slug)) {
					$menu = true;
				}
				$check_slug2 = ConfigSubMenu::where('slug', $slug)->first();
				if(!empty($check_slug2)) {
					$sub_menu = true;
				}

				if(($menu==true) || ($sub_menu == true)) {
					$slug = $slug . random_int(1, 9);
				}else {
					$again = false;
				}
			} while ($again == true);
			
	    	$menu = new ConfigMenu();
	    	$menu->title = $request->title;
			$menu->slug = $slug;
			$menu->content = $request->content;
	    	$menu->status = 1;
	    	$menu->created_at = Carbon::now();
	    	$menu->created_by = Auth::id();
	    	$menu->save();

	    	session()->flash('type', 'success');
			session()->flash('message', 'Menu Created Successfully...');
			return redirect()->route('backend.menu.index');

    	} catch (\Exception $e) {
    		session()->flash('type', 'danger');
    		session()->flash('message', 'Something Went Wrong!');
    		return redirect()->back()->withInput();
    	}
    }


    /*show menu liss*/
    public function index()
    {
    	$menus = ConfigMenu::orderBy('serial')->get();
    	return view('backends.menu.list', compact('menus'));
    }


    /*show menu details*/
    public function show($id)
    {
    	$menu = ConfigMenu::where('id', $id)->first();
    	if(!empty($menu)) {
	    	return view('backends.menu.show', compact('menu'));
	    } else {
	    	session()->flash('type', 'danger');
    		session()->flash('message', 'Invalid Menu!');
    		return redirect()->back();
	    }
    }

    /*show menu edit form*/
    public function edit($id)
    {
		$images = Media::all();
    	$menu = ConfigMenu::where('id', $id)->first();
    	if(!empty($menu)) {
	    	return view('backends.menu.edit', compact('menu', 'images'));
	    } else {
	    	session()->flash('type', 'danger');
    		session()->flash('message', 'Invalid Menu!');
    		return redirect()->back();
	    }
    }

    /*update menu details*/
    public function update(Request $request, $id)
    {
    	$request->validate([
    		'title' => 'required|min:3|unique:config_menus,title,'.request()->segment(4),
    	]);


    	try {
    		$menu = ConfigMenu::where('id', $id)->first();
	    	if(!empty($menu)) {

				$menu->title = $request->title;
				$menu->content = $request->content;
		    	$menu->status = $request->status;
		    	$menu->updated_at = Carbon::now();
		    	$menu->updated_by = Auth::id();
		    	$menu->save();

		    	session()->flash('type', 'success');
				session()->flash('message', 'Menu Updated Successfully...');
				return redirect()->route('backend.menu.index');

		    } else {
		    	session()->flash('type', 'danger');
	    		session()->flash('message', 'Invalid Menu!');
	    		return redirect()->back();
		    }

    	} catch (\Exception $e) {
    		session()->flash('type', 'danger');
    		session()->flash('message', 'Something Went Wrong!');
    		return redirect()->back();
    	}
    }
}
