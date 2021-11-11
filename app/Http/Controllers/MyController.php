<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        
        $posts = Post::all();
        $category = Category::find(1);
        dd($category->title);
     
    }
    
}
