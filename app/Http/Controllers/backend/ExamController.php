<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function exam()
    {
        return view('backend.exam.exam-list');
    }

    public function examCreate()
    {
        return view('backend.exam.exam-create');
    }
}
