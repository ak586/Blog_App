<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Models\Post;



Route::get('/', function () {
//    $object = YamlFrontMatter::parseFile(resource_path("posts/my-first-post.html"));
    $posts=Post::all();
   return view('posts', [
       'posts'=> $posts,
   ]);
});


Route::get('/posts/{post}', function ($slug) {
    $post=Post::find($slug);
    return view('post', [
        'post' => Post::find($slug),
    ]);

})->where('post', '[A-z_\-]+');

