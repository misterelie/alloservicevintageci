<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends Controller
{
    //
    public function index()
    {
        return view('interface.index');
    }

    public function register()
    {
        return view('interface.register');
    }

    public function login()
    {
        return view('interface.login');
    }
}
