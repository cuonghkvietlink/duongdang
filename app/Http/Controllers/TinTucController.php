<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class TinTucController extends Controller
{
    public function cat(){
        $posts = Post::where('category_id', config('category.tin-tuc'))->latest()->get();
        $cat_name = "Tin Tức";
        $cat_route = "tintuc";
        return view('frontend.category',compact('posts','cat_name','cat_route'));
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        if(!$post->category) abort('404');
        $related_post = Post::where('category_id', $post->category->id)
            ->where('id','!=',$post->id)
            ->inRandomOrder()
            ->limit(4)
            ->get();
        return view('frontend.cat.show',compact('post','related_post'));
    }
}
