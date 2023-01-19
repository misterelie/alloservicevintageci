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

    public function annonce()
    {
        return view('interface.pub_annonce');
    }

    //all annonces
    public function annonce_product(){
        return view('interface.annonce-product');
    }

    //categorie products
    public function catergory_product(){
        return view('interface.categorie-product');
    }
}
