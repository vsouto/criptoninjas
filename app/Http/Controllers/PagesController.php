<?php

namespace App\Http\Controllers;

use App\Cripto;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class PagesController extends Controller
{
    use SEOToolsTrait;

    public function __construct()
    {
        $this->middleware('auth')->except('index','home');
    }

    //
    public function home()
    {
        $this->seo()->setTitle('CriptoNinja');
        $this->seo()->setDescription('Tornando-se um faixa preta em criptomoedas');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->twitter()->setSite('@criptoninjas');

        $users = User::activeClient()->get();

        $user = Auth::check()? User::where('id',Auth::user()->id)->first() : false;

        $criptos = Cripto::get();

        $news = Post::take(12)
            ->orderBy('created_at','DESC')
            ->with('category')
            ->get();

        return view('pages.home',compact( 'users','criptos','news','user'));
    }

    //
    public function dashboard()
    {
        $this->seo()->setTitle('CriptoNinja - Dashboard');
        $this->seo()->setDescription('Tornando-se um faixa preta em criptomoedas');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        //$this->seo()->twitter()->setSite('@criptoninjas');

        $users = User::activeClient()->get();

        $user = User::where('id', Auth::user()->id)->with('criptos')->first();

        $criptos = Cripto::get();

        $news = Post::take(8)
            ->orderBy('created_at','DESC')
            ->with('category')
            ->get();

        return view('pages.dashboard', compact('user', 'users','criptos','news'));
    }

}
