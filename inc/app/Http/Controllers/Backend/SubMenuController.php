<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\ConfigMenu;
use App\Models\ConfigSubMenu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SubMenuController extends Controller
{
    /*show form of create new sub menu*/
    public function create()
    {
        $menus = ConfigMenu::where('status',1)->get();
        
    	return view('backends.sub-menu.create', compact('menus'));
    }

    /*store new Sub-Menu*/
    public function store(Request $request)
    {

        $request->validate([
            'menu' => 'required|exists:config_menus,id',
            'title' => 'required|min:3|unique:config_sub_menus,title',
            'content' => 'required'
        ]);

        try {
            $slug = Str::slug($request->title);
			$check_slug = ConfigSubMenu::where('slug', $slug)->first();
			if(!empty($check_slug)) {
				$slug = $slug . random_int(10, 99);
            } 
            
            $sub_menu = new ConfigSubMenu();
            $sub_menu->menu_id = $request->menu;
	    	$sub_menu->title = $request->title;
			$sub_menu->slug = $slug;
			$sub_menu->content = $request->content;
	    	$sub_menu->status = 1;
	    	$sub_menu->created_at = Carbon::now();
	    	$sub_menu->created_by = Auth::id();
	    	$sub_menu->save();

	    	session()->flash('type', 'success');
			session()->flash('message', 'Sub Menu Created Successfully...');
			return redirect()->route('backend.sub-menu.index');

    	} catch (\Exception $e) {
    		session()->flash('type', 'danger');
    		session()->flash('message', 'Something Went Wrong!');
    		return redirect()->back()->withInput();
    	}
    }


    /*show menu liss*/
    public function index()
    {
    	$sub_menus = ConfigSubMenu::all();
    	return view('backends.sub-menu.list', compact('sub_menus'));
    }


    /*show menu details*/
    public function show($id)
    {
    	$sub_menu = ConfigSubMenu::where('id', $id)->first();
    	if(!empty($sub_menu)) {
	    	return view('backends.sub-menu.show', compact('sub_menu'));
	    } else {
	    	session()->flash('type', 'danger');
    		session()->flash('message', 'Invalid Sub Menu!');
    		return redirect()->back();
	    }
    }

    /*show menu edit form*/
    public function edit($id)
    {
        $menus = ConfigMenu::where('status', 1)->get();
        $sub_menu = ConfigSubMenu::where('id', $id)->first();
    	if(!empty($sub_menu)) {
	    	return view('backends.sub-menu.edit', compact('sub_menu', 'menus'));
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
            'menu' => 'required|exists:config_menus,id',
            'title' => 'required|min:3|unique:config_sub_menus,title,'.request()->segment(4)
        ]);


    	try {
    		$sub_menu = ConfigSubMenu::where('id', $id)->first();
	    	if(!empty($sub_menu)) {

                $sub_menu->menu_id = $request->menu;
				$sub_menu->title = $request->title;
				$sub_menu->content = $request->content;
		    	$sub_menu->status = $request->status;
		    	$sub_menu->updated_at = Carbon::now();
		    	$sub_menu->updated_by = Auth::id();
		    	$sub_menu->save();

		    	session()->flash('type', 'success');
				session()->flash('message', 'Sub Menu Updated Successfully...');
				return redirect()->route('backend.sub-menu.index');

		    } else {
		    	session()->flash('type', 'danger');
	    		session()->flash('message', 'Invalid Sub-Menu!');
	    		return redirect()->back();
		    }

    	} catch (\Exception $e) {
    		session()->flash('type', 'danger');
    		session()->flash('message', 'Something Went Wrong!');
    		return redirect()->back();
    	}
    }
}
