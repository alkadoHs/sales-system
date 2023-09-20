<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        if(session()->get('userId')) {
            return view('dashboard');
        } else {
            return view('login');
        }
    }
}
