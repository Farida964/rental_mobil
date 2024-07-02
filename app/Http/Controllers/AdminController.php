<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }


    public function login()
    {
        return view('admin.login');
    }
    
    public function tables()
    {
        return view('admin.tables');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function forgotpw()
    {
        return view('admin.forgotpw');
    }
}

?>