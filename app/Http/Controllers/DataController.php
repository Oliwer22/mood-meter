<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return view('Admin/Page/data');
    }

    public function store(Request $request)
    {
        // Handle storing mood data 

    }
}
