<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }
    public function home()
    {
        return view('frontend.pages.home');
    }
    public function productsFinishes()
    {
        return view('frontend.pages.products-and-finishes');
    }
    public function termsSfService()
    {
        return view('frontend.pages.terms-of-service');
    }
    public function companyPolicies()
    {
        return view('frontend.pages.company-policies');
    }
    public function whyRey()
    {
        return view('frontend.pages.why-rey');
    }
    public function tutorials()
    {
        return view('frontend.pages.tutorials');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function createAccount()
    {
        return view('frontend.pages.create-account');
    }
    public function projects()
    {
        return view('frontend.pages.projects');
    }
    public function productDetails()
    {
        return view('frontend.pages.product-details');
    }
}
