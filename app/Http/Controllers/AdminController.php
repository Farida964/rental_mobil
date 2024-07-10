<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function frontend()
    {
        return view('frontend.index');
    }

    public function login()
    {
        return view('login');
    }
}

