<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('Admin/Page/settings');
    }

    public function store(Request $request)
    {
        // Handle storing mood data 

    }
}
