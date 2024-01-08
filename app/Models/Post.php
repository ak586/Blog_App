<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

//    everthing can be mass assigned except id
    protected $guarded=['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }
//    Never perform mass assignement until you are in control of the array
//    these list items are allowed to be mass assigned
//    protected $fillable=['title', 'body', 'excerpt'];
}
