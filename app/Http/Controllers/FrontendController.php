<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Education;
use App\Models\Notice;
use App\Models\Result;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Testimonial;
use Illuminate\Http\Request; // ✅ Laravel এর Request
use Yoeunes\Toastr\Facades\Toastr;

class FrontendController extends Controller
{
    public function index()
    {
        $teachers = Teacher::get();
        $courses = Course::with('Teacher')->get();
        $testimonials = Testimonial::get();
        return view('frontend.index', compact('teachers', 'courses', 'testimonials'));
    }

    public function aboutUs()
    {
        return view('frontend.about-us');
    }

    public function courses()
    {
        $courses = Course::get();
        $teacher = Teacher::get();
        $student = Student::with('Course')->count();
        return view('frontend.courses', compact('courses', 'student', 'teacher'));
    }

    public function teachers()
    {
        $teachers = Teacher::get();
        return view('frontend.teachers', compact('teachers'));
    }

    public function teacherInfo($id)
    {
        $teachers = Teacher::find($id);
        $courses = Course::find($id);
        return view('frontend.teacher-info', compact('teachers', 'courses'));
    }

    // Show the result form
    public function studentResult()
    {
        return view('frontend.student-result'); // Blade form
    }

    // Handle form submission and show result
    public function showResult(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
        ]);

        $result = Result::with('student')->where('student_id', $request->student_id)->first();

        if (!$result) {
            return back()->with('error', 'No result found for this Student ID');
        }

        return view('frontend.result_view', compact('result'));
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function contactUsStore(Request $request)
    {
        $contactUs = new Contact();

        $contactUs->name = $request->name;
        $contactUs->email = $request->email;
        $contactUs->subject = $request->subject;
        $contactUs->phone = $request->phone;
        $contactUs->message = $request->message;

        $contactUs->save();
        Toastr()->success('Your Messege Send Successfully.');
        return redirect()->back();
    }

    public function courseDetails($id)
    {
        $course = Course::with('teacher')->find($id);
        return view('frontend.course-details', compact('course'));
    }

    public function admission()
    {
        $courses = Course::get();
        return view('frontend.admission', compact('courses'));
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
        $student->course_id         = $request->course_id;

        // --- Image Upload ---
        if (isset($request->image)) {
            $imageName = rand() . '-student' . '.' . $request->image->extension(); //12345-student-.webp
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

    public function checkForm()
    {
        return view('frontend.check-certificate');
    }

    // Handle certificate status check
    public function checkStatus(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
        ]);

        $certificate = Certificate::where('student_id', $request->student_id)->first();

        if ($certificate) {
            // Certificate generated
            return view('frontend.certificate-status', [
                'message' => "আপনার সার্টিফিকেট জেনারেট হয়েছে। সার্টিফিকেট নাম্বার: " . $certificate->certificate_no
            ]);
        } else {
            // Not generated yet
            return view('frontend.certificate-status', [
                'message' => "আপনার সার্টিফিকেট এখনও জেনারেট হয়নি।"
            ]);
        } 
    }

    // Notice section

    public function notice()
    {
         $notices = Notice::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('frontend.notice', compact('notices'));
    }

    public function show($id)
{
    $notice = Notice::where('status', 1)->find($id);
    return view('frontend.show-notice', compact('notice'));
}

}
