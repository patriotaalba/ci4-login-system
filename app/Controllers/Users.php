<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        return view('login/login');
    }

    public function register()
    {
        session();
        $data = [
            'validate' => \Config\Services::validation()
        ];

        return view('login/register', $data);
    }
}
