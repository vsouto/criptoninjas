<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class PostsController extends Controller
{
    use SEOToolsTrait;

    public function index()
    {
        $this->seo()->setTitle('CriptoNinja - Notícias');
        $this->seo()->opengraph()->addProperty('type', 'articles');

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

        $categories = Category::take(10)
            ->orderBy('name','ASC')
            ->get();

        return view('posts.index',compact('news','videos', 'categories'));
    }

    //
    public function show($slug)
    {
        $this->seo()->setTitle('CriptoNinja - Notícias');
        $this->seo()->opengraph()->addProperty('type', 'articles');

        $post = Post::where('slug',$slug)->first();

        return view('posts.show',compact('post'));
    }

}
