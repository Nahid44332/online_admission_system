<?php

namespace App\Http\Controllers;


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
}
