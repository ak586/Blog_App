<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        return view('posts.index', [
            'posts'=> Post::latest()->filter(request(['search', 'category', 'author']))->SimplePaginate(6)->withQueryString(),

        ]);
//        dd(Category::firstWhere('slug', )));
    }

    public function search (Post $post){
        return view('posts.show',
            ['post'=> $post,
            ]);
    }


}




