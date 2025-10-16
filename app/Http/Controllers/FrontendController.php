<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }

    public function product()
    {
        return view('frontend.product-list');
    }
    public function addproduct()
    {
        return view('frontend.add-product');
    }
    public function expiredproduct()
    {
        return view('frontend.expired-product');
    }
    public function stock(){
        return view('frontend.stock-list');
    }
    public function manager(){
        return view('frontend.manger.dashboard');
    }
    public function saleman(){
        return view('frontend.saleman.dashboard');
    }
    public function category(){
        return view('frontend.category-list');
    }
}


