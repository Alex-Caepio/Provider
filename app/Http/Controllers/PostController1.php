<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Tag;

use App\Models\Category;

class PostController extends Controller
{
    public function index(){
        
        $post = Post::find(1);
        $tag = Tag::find(1);
        dd($tag->posts);
        //dump($post->tags);
       /*$category = Category::find(1);
        $post = Post::find(1);
        dump($post->category);*/
       //dd($category->posts);

       //$posts = Post::where('category_id', $category->id)->get();

       //dd($posts);
       
       
    }
    
}
