<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Student;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class adminController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function adminDashboard()
    {
        return view('backend.admin-dashboard');
    }

    public function studentList()
    {
        $students = Student::with('education', 'course')->get();
        return view('backend.student-list', compact('students'));
    }

   public function updateStatus($id)
{
    $student = Student::findOrFail($id);
    $student->status = $student->status == 1 ? 0 : 1;
    $student->save();

    if($student->status == 1){
        toastr()->success('Student ID '.$student->id.' is now Active');
    } else {
        toastr()->warning('Student ID '.$student->id.' is now Inactive');
    }

    return redirect()->back();
    } 
    
    public function deleteStudent($id)
    {
        $students = Student::with('education')->find($id);
        
        if($students->image && file_exists('backend/images/students/'.$students->image)){
            unlink('backend/images/students/'.$students->image);
        }

        $students->delete();
        toastr()->success('Student ID'. $students->id,'Deleted Successfully!');
        return redirect()->back();
    }

    public function editStudent($id)
    {
        $students = Student::with('education')->find($id);
        // dd($students);
        return view('backend.edit-student', compact('students'));
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::with('education')->findOrFail($id);

        // Student ডেটা আপডেট
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
        $student->course            = $request->course;
        $student->present_address   = $request->present_address;
        $student->permanent_address = $request->permanent_address;

        // Image আপডেট
        if($request->hasFile('image')){
            $image = $request->file('image');

        // পুরানো ছবি ডিলিট
        if($student->image && file_exists(public_path('backend/images/students/'.$student->image))){
            unlink(public_path('backend/images/students/'.$student->image));
        }

        // নতুন ইমেজ আপলোড
        $imageName = rand().'-student'.'.'.$image->extension();
        $image->move(public_path('backend/images/students/'), $imageName);
        $student->image = $imageName;
    }

        $studentChanged = $student->isDirty(); // ডাটাবেজের সাথে মিলিয়ে দেখবে

        $student->save();

        // Education আপডেট (hasMany অনুযায়ী)
        $educationChanged = false;
        if(isset($request->ssc_passing_year) && $request->ssc_passing_year[0] != null){
        // পুরানো Education রেকর্ড মুছে দিন
        Education::where('student_id', $student->id)->delete();

        // নতুন ডেটা যোগ করুন
        foreach($request->ssc_passing_year as $key => $sscYear){
            $education = new Education();
            $education->student_id        = $student->id;
            $education->ssc_passing_year  = $sscYear;
            $education->ssc_board         = $request->ssc_board[$key];
            $education->ssc_result        = $request->ssc_result[$key];
            $education->hsc_passing_year  = $request->hsc_passing_year[$key];
            $education->hsc_board         = $request->hsc_board[$key];
            $education->hsc_result        = $request->hsc_result[$key];
            $education->save();
        }
        $educationChanged = true;
    }

    // চেক করো কিছু পরিবর্তন হয়েছে কিনা
    if($studentChanged || $educationChanged){
        toastr()->success('Student info updated successfully!');
    } else {
        toastr()->info('No changes were made!');
    }

    return redirect('/admin/student/list');
}
}