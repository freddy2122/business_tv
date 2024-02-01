<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('partials.welcome');
    }

    public function contact()
    {
        return view('partials.contact');
    }
    
    public function about()
    {
        return view('partials.about');
    }

    public function blog()
    {
        return view('partials.blog');
    }
}
