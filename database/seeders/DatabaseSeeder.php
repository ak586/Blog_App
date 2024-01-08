<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//        Post::factory(5)->create();


        User::truncate();
        Post::truncate();
        Category::truncate();

         $user=User::factory()->create();

         $personal=Category::create([
             'name'=>'Personal',
             'slug'=>'personal'
         ]);

       $family= Category::create([
            'name'=>'Family',
            'slug'=>'family'
        ]);

        $work=Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);

        Post::create(['title' => 'My work post',
            'user_id'=>$user->id,
            'slug' => 'my-work-post',
            'excerpt' => 'this is my work post',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet nisl suscipit adipiscing bibendum est. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Non tellus orci ac auctor. Venenatis tellus in metus vulputate. Pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Morbi leo urna molestie at elementum. Nulla at volutpat diam ut venenatis tellus in. Laoreet sit amet cursus sit amet dictum sit amet justo. Facilisi etiam dignissim diam quis. Ac turpis egestas sed tempus urna. Amet nisl suscipit adipiscing bibendum est ultricies integer. Egestas maecenas pharetra convallis posuere morbi leo urna molestie at. Dignissim convallis aenean et tortor at risus viverra. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Posuere urna nec tincidunt praesent semper feugiat nibh sed. Non sodales neque sodales ut etiam sit amet nisl purus. Nisl purus in mollis nunc sed id semper risus in. Lectus mauris ultrices eros in cursus turpis massa tincidunt.</p>',
            'category_id' => $work->id]);

        Post::create(['title' => 'My hobbies post',
            'user_id'=>$user->id,
            'slug' => 'my-hobbies-post',
            'excerpt' => 'this is my hobbies post',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet nisl suscipit adipiscing bibendum est. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Non tellus orci ac auctor. Venenatis tellus in metus vulputate. Pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Morbi leo urna molestie at elementum. Nulla at volutpat diam ut venenatis tellus in. Laoreet sit amet cursus sit amet dictum sit amet justo. Facilisi etiam dignissim diam quis. Ac turpis egestas sed tempus urna. Amet nisl suscipit adipiscing bibendum est ultricies integer. Egestas maecenas pharetra convallis posuere morbi leo urna molestie at. Dignissim convallis aenean et tortor at risus viverra. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Posuere urna nec tincidunt praesent semper feugiat nibh sed. Non sodales neque sodales ut etiam sit amet nisl purus. Nisl purus in mollis nunc sed id semper risus in. Lectus mauris ultrices eros in cursus turpis massa tincidunt.</p>',
            'category_id' => $personal->id]);

        Post::create(['title' => 'My family post',
            'user_id'=>$user->id,
            'slug' => 'my-family-post',
            'excerpt' => 'this is a family post',
            'body' => '<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet nisl suscipit adipiscing bibendum est. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Non tellus orci ac auctor. Venenatis tellus in metus vulputate. Pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Morbi leo urna molestie at elementum. Nulla at volutpat diam ut venenatis tellus in. Laoreet sit amet cursus sit amet dictum sit amet justo. Facilisi etiam dignissim diam quis. Ac turpis egestas sed tempus urna. Amet nisl suscipit adipiscing bibendum est ultricies integer. Egestas maecenas pharetra convallis posuere morbi leo urna molestie at. Dignissim convallis aenean et tortor at risus viverra. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Posuere urna nec tincidunt praesent semper feugiat nibh sed. Non sodales neque sodales ut etiam sit amet nisl purus. Nisl purus in mollis nunc sed id semper risus in. Lectus mauris ultrices eros in cursus turpis massa tincidunt.
</p>',
            'category_id' => $family->id]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
