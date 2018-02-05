<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    //
    public function index()
    {
        return view('home');
    }

    //
    public function dashboard()
    {

        return view('pages.dashboard');
    }

}
