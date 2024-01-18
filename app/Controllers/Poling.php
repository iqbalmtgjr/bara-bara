<?php

namespace App\Controllers;

class Poling extends BaseController
{
    public function index(): string
    {
        return view('poling/index');
    }

    public function about(): string
    {
        return view('about/index');
    }
}
