<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class teachersController extends Controller
{
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
}
