<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return response()->json('test 123');
    }

    public function testing()
    {
        return response()->json('lab data science');
    }

    public function landing()
    {
        return response()->json('Tes Landing');
    }
}
