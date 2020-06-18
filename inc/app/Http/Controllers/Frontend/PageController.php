<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ConfigMenu;
use App\Models\ConfigSubMenu;
use App\Models\Student;
use App\Models\FeedbackMessage;
use App\Models\PdfFile;
use Carbon\Carbon;

class PageController extends Controller
{
    public function showIndex() {
        $menus = ConfigMenu::where('status', 1)->where('slug', '!=', 'home')->orderBy('serial')->get();
        $page_content = ConfigMenu::where('slug', 'home')->first();
        return view('frontends.index', compact('menus', 'page_content'));
    }

    public function showPage($page_slug) {

        $menus = ConfigMenu::where('status', 1)->where('slug', '!=', 'home')->orderBy('serial')->get();
        
        $page_content = ConfigSubMenu::where('slug', $page_slug)->first();
        if (empty($page_content)) {
            $page_content = ConfigMenu::where('slug', $page_slug)->first();
            if (empty($page_content)) {
                session()->flash('type', 'danger');
                session()->flash('message', 'Invalid Page');
                return redirect()->back();
            }
        }
        return view('frontends.pages', compact('menus', 'page_content'));
    }

    public function showAudience()
    {
        $menus = ConfigMenu::where('status', 1)->where('slug', '!=', 'home')->orderBy('serial')->get();
        $students = Student::all();
        // dd($students);
        return view('frontends.audience', compact('menus', 'students'));
    }


    public function showFeedbackForm()
    {
        $menus = ConfigMenu::where('status', 1)->where('slug', '!=', 'home')->orderBy('serial')->get();
        
        return view('frontends.feedback', compact('menus'));
    }

    public function processFeedbackForm(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        try {

            $feedback = new FeedbackMessage();
            $feedback->name = $request->name;
            $feedback->email = $request->email;
            $feedback->subject = $request->subject;
            $feedback->message = $request->message;
            $feedback->created_at = Carbon::now();
            $feedback->save();

        } catch (\Exception $e) {
            return redirect()->back()->with(['err' => 'Something Went Wrong']);
        }

        return redirect()->back()->with(['entry_success' => 'Feedback Send Successfully']);
    }

    public function showContactPage()
    {
        $menus = ConfigMenu::where('status', 1)->where('slug', '!=', 'home')->orderBy('serial')->get();
        
        return view('frontends.contact', compact('menus'));
    }

    
    public function showLocationOnePage()
    {
        $menus = ConfigMenu::where('status', 1)->where('slug', '!=', 'home')->orderBy('serial')->get();
        
        return view('frontends.location-one', compact('menus'));
    }

    public function showLocationTwoPage()
    {
        $menus = ConfigMenu::where('status', 1)->where('slug', '!=', 'home')->orderBy('serial')->get();
        
        return view('frontends.location-two', compact('menus'));
    }

    public function showLocationThreePage()
    {
        $menus = ConfigMenu::where('status', 1)->where('slug', '!=', 'home')->orderBy('serial')->get();
        
        return view('frontends.location-three', compact('menus'));
    }

    public function showPdfPage(){
        $menus = ConfigMenu::where('status', 1)->where('slug', '!=', 'home')->orderBy('serial')->get();
        $pdfs = PdfFile::all();
        return view('frontends.file-pdf',compact('menus','pdfs'));
    }
}
