<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }

    public function actualité()
    {
        return view('actualité');
    }

    public function imam()
    {
        return view('imam');
    }

    public function mosque()
    {
        return view('mosque');
    }
    public function club()
    {
        return view('club');
    }

}
