<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function siteSetting()
    {
        $siteSettings = Settings::first();
        return view('backend.settings.site-setting', compact('siteSettings'));
    }

    public function siteSettingUpdate(Request $request)
    {
        $siteSettings = Settings::first();

        $siteSettings->sitename = $request->sitename;
        $siteSettings->site_description = $request->site_description;
        $siteSettings->phone = $request->phone;
        $siteSettings->email = $request->email;
        $siteSettings->address = $request->address;
        $siteSettings->opening = $request->opening;
        $siteSettings->helpline = $request->helpline;
        $siteSettings->facebook = $request->facebook;
        $siteSettings->twitter = $request->twitter;
        $siteSettings->google = $request->google;
        $siteSettings->instagram = $request->instagram;

          if(isset($request->logo)){

            if($siteSettings->logo && file_exists('backend/images/seetings/'.$siteSettings->logo)){
                unlink('backend/images/seetings/'.$siteSettings->logo);
            }

            $imageName = rand().'-logo'.'.'.$request->logo->extension();
            $request->logo->move('backend/images/seetings/', $imageName);

            $siteSettings->logo = $imageName;
        }

        $siteSettings->save();
        toastr()->success('Settings Update Successfully.');
        return redirect()->back();
    }

     //about us
    public function aboutUs()
    {
        $aboutus = AboutUs::first();
        return view('backend.about-us.about-us', compact('aboutus'));
    }
    
    public function aboutUsUpdate(Request $request)
    {
        $aboutus = AboutUs::first();
       
        $aboutus->title = $request->title;
        $aboutus->description = $request->description;
        $aboutus->choose_description = $request->choose_description;
        $aboutus->choose_title = $request->choose_title;
        $aboutus->choose_description = $request->choose_description;
        $aboutus->mission_title = $request->mission_title;
        $aboutus->mission_description = $request->mission_description;
        $aboutus->vision_title = $request->vision_title;
        $aboutus->vision_description = $request->vision_description;

        if(isset($request->image)){

            if($aboutus->image && file_exists('backend/images/aboutus/'.$aboutus->image)){
                unlink('backend/images/aboutus/'.$aboutus->image);
            }

            $imageName = rand().'-aboutus'.'.'.$request->image->extension();
            $request->image->move('backend/images/aboutus/', $imageName);

            $aboutus->image = $imageName;
        }

        $aboutus->save();
        Toastr()->success('About Updated Successfully.');
        return redirect()->back();
    }

    public function policySetting()
    {
        return view('backend.settings.policy-settings'); 
    }
}
