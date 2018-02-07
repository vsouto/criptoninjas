<?php

namespace App\Http\Controllers;

use App\Cripto;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $users = User::activeClient()->get();

        $user = User::where('id', Auth::user()->id)->with('criptos')->first();

        $criptos = Cripto::get();

        return view('pages.dashboard', compact('user', 'users','criptos'));
    }

}
