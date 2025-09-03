<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;

class teachersController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function addTeacher()
    {
        return view('backend.add-teacher');
    }

    public function teacherStore(Request $request)
    {
        // --- Student Data Save ---
        $teacher = new Teacher();

        $teacher->name = $request->name;
        $teacher->designation = $request->designation;
        $teacher->phone = $request->phone;
        $teacher->about = $request->about;
        $teacher->achievements = $request->achievements;
        $teacher->objective = $request->objective;
        $teacher->short_description = $request->short_description;
        $teacher->facebook_link = $request->facebook_link;
        $teacher->twitter_link = $request->twitter_link;
        $teacher->google_link = $request->google_link;
        $teacher->linkedin_link = $request->linkedin_link;

        // --- Image Upload ---
        if(isset($request->profile_image)){
            $imageName = rand().'-teacher'.'.'.$request->profile_image->extension(); //12345-teacher-.webp
            $request->profile_image->move('backend/images/teachers/', $imageName);

            $teacher->profile_image = $imageName;
        }

        $teacher->save();
        toastr()->success('You have been Ragistered Successfully!');
        return redirect()->back();
    }

    public function teacherList()
    {
        $teachers = Teacher::get();
        return view('backend.teacher-list', compact('teachers'));
    }

    public function teacherView($id)
    {
        $teacher = Teacher::find($id);
        return view('backend.view-teacher', compact('teacher'));
    }

    public function teacherDelete($id)
    {
        $teacher = Teacher::find($id);

         if($teacher->profile_image && file_exists('backend/images/teachers/'.$teacher->profile_image)){
            unlink('backend/images/teachers/'.$teacher->profile_image);
        }

        $teacher->delete();
        Toastr()->success('Teacher Deleted Successfully!');
        return redirect()->back();
    }

    public function teacherEdit($id)
    {
        $teachers = Teacher::find($id);
        return view('backend.edit-teacher', compact('teachers'));
    }

    public function updateTeacher(Request $request,$id)
    {
        $teacher = Teacher::find($id);
        
        $teacher->name = $request->name;
        $teacher->designation = $request->designation;
        $teacher->phone = $request->phone;
        $teacher->about = $request->about;
        $teacher->achievements = $request->achievements;
        $teacher->objective = $request->objective;
        $teacher->short_description = $request->short_description;
        $teacher->facebook_link = $request->facebook_link;
        $teacher->twitter_link = $request->twitter_link;
        $teacher->google_link = $request->google_link;
        $teacher->linkedin_link = $request->linkedin_link;

         if(isset($request->profile_image)){

            if($teacher->profile_image && file_exists('backend/images/teachers/'.$teacher->profile_image)){
                unlink('backend/images/teachers/'.$teacher->profile_image);
            }

            $imageName = rand().'-teacher'.'.'.$request->profile_image->extension(); //12345-teacher-.webp
            $request->profile_image->move('backend/images/teachers/', $imageName);

            $teacher->profile_image = $imageName;
        }

        $teacher->save();
        Toastr()->success('Teachers info Updated Successfully!');
        return redirect('/admin/teacher/list');
    }
}
