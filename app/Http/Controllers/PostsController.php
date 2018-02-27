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

        $this->seo()->setTitle('CriptoNinja - Notícias');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->opengraph()->setDescription('Notícias, vídeos e todo o conteúdo que você precisa pra dominar cripto');
        $this->seo()->opengraph()->addImage( asset('img/criptoninja-box.png') );
        $this->seo()->opengraph()->setUrl( Request::url() );

        return view('posts.index',compact('news','videos', 'categories'));
    }

    //
    public function show(Request $request, $slug)
    {
        $post = Post::where('slug',$slug)->with('author')->first();

        $this->seo()->setTitle('CriptoNinja - Notícias');
        $this->seo()->opengraph()->addProperty('type', 'article');
        $this->seo()->opengraph()->addProperty('type', 'article');
        $this->seo()->opengraph()->setDescription($post->excerpt);
        $this->seo()->opengraph()->setUrl( $request->url() );
        $this->seo()->opengraph()->setArticle([
            'published_time' => $post->created_at,
            'author' => $post->author? $post->author->name : 'CriptoNinja',
            'tag' => $post->meta_keywords
        ]);

        $image = isValidImage(asset('storage/' . $post->image))? asset('storage/' . $post->image) : asset('img/criptoninja-box.png');

        $this->seo()->opengraph()->addImage( $image );

        return view('posts.show',compact('post'));
    }

}
