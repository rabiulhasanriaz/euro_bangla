<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\PdfFile;
use Auth;

class PdfController extends Controller
{
    public function createPage(){
    	$pdfs = PdfFile::all();
    	return view('backends.pdf.create',compact('pdfs'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|min:2',
            'content' => 'mimes:pdf'
        ]);

        try {

            $pdf_url = "";
            if ($request->hasFile('content')) {
                $files = $request->file('content');
                $extension = $request->file('content')->getClientOriginalExtension();
                $name = 'upload_' . time() . Auth::id() . '.' . $extension;
                $destinationPath = 'assets/uploads/pdf';
                $files->move($destinationPath, $name);
                $pdf_url = $destinationPath. "/" .$name;
            } else {
                session()->flash('type', 'danger');
                session()->flash('message', 'Something Went Wrong...');
                return redirect()->back()->withInput();
            }
            
	    	$image = new PdfFile();
	    	$image->title = $request->title;
			$image->pdf = $pdf_url;
	    	$image->status = 1;
	    	$image->created_at = Carbon::now();
	    	$image->created_by = Auth::id();
	    	$image->save();

	    	session()->flash('type', 'success');
			session()->flash('message', 'PDF File Added Successfully...');
			return redirect()->back();

    	} catch (\Exception $e) {
    		session()->flash('type', 'danger');
    		session()->flash('message', 'Something Went Wrong!');
    		return redirect()->back()->withInput();
    	}
    }

    public function delete_pdf(Request $request,$id){
    	$pdfDel = PdfFile::find($id)->delete();
    	return redirect()->back()->with(['del' => 'PDF Deleted Successfully']);
    }
}
