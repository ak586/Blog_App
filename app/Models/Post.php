<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{

    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug){
        $this->title=$title;
        $this->date=$date;
        $this->excerpt=$excerpt;
        $this->body=$body;
        $this->slug=$slug;
    }


    public static function find($slug)
    {
        $post= static::all()->firstWhere('slug',$slug );
        return  $post;
    }

    public static function findOrFail($slug){
        $post=static::find($slug);
        if(!$post) throw new ModelNotFoundException();
        return  $post;
    }


    public static function all()
    {
        return cache()->rememberForever('posts.all', function(){
            return collect(File::files(resource_path("/posts/")))
                ->map(function($file){
                    $blog_data=YamlFrontMatter::parseFile($file);
                    return new Post(
                        $blog_data->title,
                        $blog_data->excerpt,
                        $blog_data->date,
                        $blog_data->body(),
                        $blog_data->slug
                    );
                })->sortByDesc('date');
        });

    }
}
