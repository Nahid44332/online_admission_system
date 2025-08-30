<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

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
        $students = Student::with('educations')->get();
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
        $students = Student::with('educations')->find($id);
        dd($students);
    }
}
