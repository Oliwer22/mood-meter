<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoodController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        // Handle storing mood data later

    }
}
