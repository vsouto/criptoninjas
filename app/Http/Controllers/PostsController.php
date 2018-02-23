<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $news = Post::take(20)
            ->orderBy('created_at','DESC')
            ->where('category_id','1')
            ->with('category')
            ->get();

        $videos = Post::take(20)
            ->orderBy('created_at','DESC')
            ->where('category_id','2')
            ->with('category')
            ->get();

        $analises = Post::take(20)
            ->orderBy('created_at','DESC')
            ->where('category_id','3')
            ->with('category')
            ->get();

        $categories = Category::take(10)
            ->orderBy('name','ASC')
            ->get();

        return view('posts.index',compact('news','videos','analises', 'categories'));
    }

    //
    public function show($slug)
    {
        //$posts = Post::take(6)->get();

        $post = Post::where('slug',$slug)->first();

        //$categories = Category::get();

        return view('posts.show',compact('post'));
        //return view('posts.show',compact('post','posts','categories'));
    }

    public function create()
    {


        return view('posts.create');
    }
}
