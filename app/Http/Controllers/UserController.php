<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('Admin/Page/users');
    }

    public function store(Request $request)
    {
        // Handle storing mood data 

    }
}
