<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // dd('cccccc');
        return view('login');
    }
    public function home()
    {
        // dd('cccccc');
        return view('home');
    }
}
