<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
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
}
