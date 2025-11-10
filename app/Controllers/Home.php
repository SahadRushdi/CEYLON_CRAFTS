<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('ceylon_home');
    }

    public function about(): string
    {
        return view('ceylon_about');
    }

    public function products(): string
    {
        return view('ceylon_products');
    }

    public function contact(): string
    {
        return view('ceylon_contact');
    }
}
