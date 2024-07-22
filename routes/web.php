<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'ahmad ihsanullah', 'title'=>'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=>'Blog', 'posts'=> Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);

});

Route::get('/contact', function () {
    return view('contact', ['name'=>'ahmad','title'=>'Contact']);
});
