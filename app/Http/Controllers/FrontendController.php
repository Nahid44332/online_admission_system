<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Student;
use Illuminate\Http\Request; // ✅ Laravel এর Request

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function aboutUs()
    {
        return view('frontend.about-us');
    }
    public function courses()
    {
        return view('frontend.courses');
    }
    public function teachers()
    {
        return view('frontend.teachers');
    }
    public function teacherInfo()
    {
        return view('backend.teacher-info');
    }
    public function contactUs()
    {
        return view('frontend.contact-us');
    }
    public function courseDetails()
    {
        return view('frontend.course-details');
    }
    public function admission()
    {
        return view('frontend.admission');
    }
    public function admissionStore(Request $request)
    {
        // --- Student Data Save ---
        $student = new Student();

        $student->name              = $request->name;
        $student->father_name       = $request->father_name;
        $student->mother_name       = $request->mother_name;
        $student->dob               = $request->dob;
        $student->gender            = $request->gender;
        $student->email             = $request->email;
        $student->phone             = $request->phone;
        $student->blood             = $request->blood;
        $student->nationality       = $request->nationality;
        $student->religion          = $request->religion;
        $student->course            = $request->class; // ফর্মের 'class' ফিল্ড course হিসেবে সেভ

        // --- Image Upload ---
        if(isset($request->image)){
            $imageName = rand().'-student'.'.'.$request->image->extension(); //12345-student-.webp
            $request->image->move('backend/images/students/', $imageName);

            $student->image = $imageName;

        }

        $student->present_address   = $request->address;
        $student->permanent_address = $request->permanent_address;
        $student->save();

        // --- Education Data Save ---
        $education = new Education();
        $education->student_id       = $student->id;
        $education->ssc_passing_year = $request->ssc_passing_year;
        $education->ssc_board        = $request->ssc_board;
        $education->ssc_result       = $request->ssc_result;
        $education->hsc_passing_year = $request->hsc_passing_year;
        $education->hsc_board        = $request->hsc_board;
        $education->hsc_result       = $request->hsc_result;

        $education->save();
        toastr()->success('You have been Ragistered Successfully!');
        return redirect()->back();
    }
}
