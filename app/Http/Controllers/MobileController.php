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

    public function reset_password()
    {
        return view('interface.reset_password');
    }

    public function annonce()
    {
        return view('interface.pub_annonce');
    }

    //all annonces
    public function annonce_product(){
        return view('interface.annonce-product');
    }

    // all category products
    public function catergory_product(){
        return view('interface.all-category-product');
    }

    // Mediatheque video aide
    public function media_help(){
        return view('interface.mediatheque_aide');
    }

    // commune
    public function commune(){
        return view('interface.commune');
    }

    // Annonce vip
    public function annonce_vip(){
        return view('interface.annonce_vip');
    }

    // buy credit
    public function buycredit(){
        return view('interface.buy_credit');
    }
    
    // annonce par commune
    public function commune_annonce(){
        return view('interface.commune_annonce');
    }

    // annonce par categorie
    public function annonce_categorie(){
        return view('interface.annonce_category');
    }
    
    // detail annonce
    public function detail_annonce(){
        return view('interface.detail_annonce');
    }
}
