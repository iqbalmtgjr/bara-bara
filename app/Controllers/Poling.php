<?php

namespace App\Controllers;

class Poling extends BaseController
{
    public function index(): string
    {
        return view('pages/poling');
    }

    public function about(): string
    {
        return view('pages/about');
    }

    public function contact(): string
    {
        return view('pages/contact');
    }

    public function faq(): string
    {
        return view('pages/faq');
    }
}
