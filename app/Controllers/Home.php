<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function about(): string
    {
        return view('aboutPage');
    }

    public function info(): string
    {
        return view('infoPage');
    }

    public function landing(): string
    {
        return view('landingPage');
    }
}
