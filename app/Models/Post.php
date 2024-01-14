<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $with=['author', 'category'];

//    everthing can be mass assigned except id
    protected $guarded=['id'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search']?? false , function($query, $search){

           $query->where(fn($query)=>
            $query->where('title', 'like', '%'.$search.'%')
                ->orWhere('body', 'like', '%'.$search.'%')
           );
        });

        $query->when($filters['category']?? false , fn ($query, $category)=>
            $query->
                whereHas('category', fn ($query)=>
            $query->where('slug', $category))
    );
        $query->when($filters['author']?? false , fn ($query, $author)=>
        $query->
        whereHas('author', fn ($query)=>
        $query->where('username', $author))
        );


    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id' );
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }




//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }
//    Never perform mass assignement until you are in control of the array
//    these list items are allowed to be mass assigned
//    protected $fillable=['title', 'body', 'excerpt'];
}
