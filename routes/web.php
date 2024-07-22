<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'ahmad ihsanullah', 'title'=>'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=>'Blog', 'posts'=> Post::all()]);
});


Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title'=> count($user->posts) . ' Articles Written By ' . $user->name, 'posts'=> $user->posts]);
});

Route::get('/posts/{post:slug}', function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);

});


Route::get('/posts/categories/{category:slug}', function(Category $category){
    return view('posts', ['title' => 'Article In Category ' . $category->name, 'posts' => $category->posts]);

});

Route::get('/contact', function () {
    return view('contact', ['name'=>'ahmad','title'=>'Contact']);
});
