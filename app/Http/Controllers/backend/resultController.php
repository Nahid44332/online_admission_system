<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class resultController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function studentResult()
    {
        return view('backend.result.result');
    }
}
