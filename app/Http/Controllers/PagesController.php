<?php

namespace App\Http\Controllers;

use App\User;
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

        $user = User::where('name', 'Victor')->with('criptos')->get();

        dd($user->first()->criptos->where('code','BTC')->first());

        return view('pages.dashboard', compact('wallets'));
    }

}
