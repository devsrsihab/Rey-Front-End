<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.pages.dashboard.index');
    }

    public function edit()
    {
        return view('backend.pages.dashboard.edit');
    }

    public function view()
    {
        return view('backend.pages.dashboard.view');
    }

    // Define methods for other admin routes similarly
}
