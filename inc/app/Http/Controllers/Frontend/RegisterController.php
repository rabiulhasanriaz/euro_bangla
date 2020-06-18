<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\ConfigMenu;
use App\Models\Student;
use App\Models\Institution;
use App\Models\Country;
use App\Models\Area_of_study;
use App\Models\Visitor;
use Auth;

class RegisterController extends Controller
{
    public function showStudentRegisterForm()
    {
        $menus = ConfigMenu::where('status', 1)->where('slug', '!=', 'home')->orderBy('serial')->get();
        $academicInterest = Area_of_study::all();
        $group_aca_inte = $academicInterest->groupBy('area_cat');
        return view('frontends.student-registration', compact('menus','group_aca_inte'));
    }

    public function showInstituteRegisterForm()
    {
        $countries = Country::all();
        $menus = ConfigMenu::where('status', 1)->where('slug', '!=', 'home')->orderBy('serial')->get();
        return view('frontends.instutional-registration', compact('menus','countries'));
    }

    public function submitStudentRegisterForm(Request $request){
        
        
        // dd($request->all());
        $time = Carbon::now();
        $request->validate([
            'full_name' => 'required',
            'date_of_birth' => 'required',
            'city_of_residence' => 'required',
            'institute' => 'required',
            'phone_number' => 'required',
            'whats_app_number' => 'required',
            'email' => 'required',
            'academic_interest' => 'required',
            'preferred_course' => 'required',
            'aggreement' => 'required',
            'cv' => 'required|file|mimes:doc,pdf,docx'
        ]);
        // dd($request->all());
        try {
            $studentRegistration = new Student();
            $img_url = "";
            if ($request->hasFile('cv')) {
                $files = $request->file('cv');
                $extension = $request->file('cv')->getClientOriginalExtension();
                $name = 'upload_' . time() . Auth::id() . '.' . $extension;
                $destinationPath = 'assets/uploads/cv';
                $files->move($destinationPath, $name);
                $img_url = $destinationPath. "/" .$name;
            } else {
                return redirect()->back()->with(['err' => 'CV field is required']);
            }
            $studentRegistration->full_name = $request->full_name;
            $studentRegistration->date_of_birth = $request->date_of_birth;
            $studentRegistration->city_of_residence = $request->city_of_residence;
            $studentRegistration->institute = $request->institute;
            $studentRegistration->phone_number = $request->phone_number;
            $studentRegistration->whatsapp_number = $request->whats_app_number;
            $studentRegistration->email_address = $request->email;
            $studentRegistration->cv = $img_url;
            $studentRegistration->academic_interest = $request->academic_interest;
            $studentRegistration->preferred_course = $request->preferred_course;
            $studentRegistration->agreement_promotional_purpose = $request->aggreement;
            $studentRegistration->created_at = $time;
            $studentRegistration->save();

            $this->send_email_student($studentRegistration);
            
            
        } catch (\Exception $e) {
            return redirect()->back()->with(['err' => $e->getMessage()]);
        }
        return redirect()->back()->with(['student_entry_reg_success' => 'Student Registration Successfully']);
            
    }

    public function submitInstituteRegisterForm(Request $request){
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'address' => 'required',
            'website' => 'required',
            'person' => 'required',
            'number' => 'required',
            'email' => 'required',
        ]);
        try {
            $time = Carbon::now();
            $instituteRegistration = new Institution();
            $instituteRegistration->institute_name = $request->name;
            $instituteRegistration->institute_country = $request->country;
            $instituteRegistration->institute_address = $request->address;
            $instituteRegistration->institute_website = $request->website;
            $instituteRegistration->contact_person_name = $request->person;
            $instituteRegistration->position_contact_person = $request->position;
            $instituteRegistration->phone_number = $request->number;
            $instituteRegistration->email = $request->email;
            $instituteRegistration->alternative_email = $request->alter_email;
            $instituteRegistration->sponsorship = $request->sponsor_agree;
            $instituteRegistration->sponsorship_package = $request->sponsor_cat;
            $instituteRegistration->meeting = $request->contact_representative;
            $instituteRegistration->created_at = $time;
            $instituteRegistration->save();

            $this->send_email_institute($instituteRegistration);


        } catch (\Exception $e) {
            return redirect()->back()->with(['err' => $e->getMessage()]);
        }
        return redirect()->back()->with(['entry_success' => 'Institute Registered Successfully']);
    }


    public function send_email_student($student_info) {
        $name = "Euro-Bangla-Expo";
        $email = "registration@euro-bangla-expo.org";
        $from = "FROM:$name<$email>";
        $to = "oalid@iglweb.com";
        // to email: ebee2020@euro-bangla-expo.org
        $subject = "Student Registration | Euro-Bangla-Expo";
        
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        // Compose a simple HTML email message
        
        $mail_view = view('email.student-registration', compact('student_info'));
        $message = $mail_view->render();
        
        
        $mail = mail($to, $subject, $message, $headers);
    }


    public function send_email_institute($institute_info) {
        $name = "Euro-Bangla-Expo";
        $email = "registration@euro-bangla-expo.org";
        $from = "FROM:$name<$email>";
        $to = "oalid@iglweb.com";
        // to email: ebee2020@euro-bangla-expo.org
        $subject = "Institute Registration | Euro-Bangla-Expo";
        
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        // Compose a simple HTML email message
        $mail_view = view('email.institute-registration', compact('institute_info'));
        $message = $mail_view->render();
        
        
        $mail = mail($to, $subject, $message, $headers);
    }

    public function show_visitor_registration_page(){
        $menus = ConfigMenu::where('status', 1)->where('slug', '!=', 'home')->orderBy('serial')->get();
        return view('frontends.visitor-registration',compact('menus'));
    }

    public function visitor_registration_submit(Request $request){
        $time = Carbon::now()->format('Y-m-d');
        $request->validate([
            'name' => 'required',
            'sector' => 'required',
            'phone' => 'required',
            'agree' => 'required',
        ]);
        try{
            $visitorRegistration = new Visitor();
            $visitorRegistration->full_name = $request->name;
            $visitorRegistration->represented_organization = $request->organization;
            $visitorRegistration->sector = $request->sector;
            $visitorRegistration->email = $request->email;
            $visitorRegistration->phone_number = $request->phone;
            $visitorRegistration->whatsapp_number = $request->whatsapp;
            $visitorRegistration->agreement = $request->agree;
            $visitorRegistration->created_at = $time;
            $visitorRegistration->updated_at = $time;
            $visitorRegistration->save();
        }catch(\Exception $e){
            return redirect()->back()->with(['err' => $e->getMessage()]);
        }
        
        return redirect()->back()->with(['visitor-registration' => 'Visitor Registered Successfully']);
    }
}
