<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',["title"=>"Home Page"]);
});


Route::get('/about', function () {
    return view('about',["title"=>"About"]);
});

Route::get('/posts', function () {
    // jika ingin custom query gunakan get()
    // menambhakan "with" eloquent akan menghemat waktu eksekusi query ke DB(N+1) /lazy loading
    // eager loading, load data relasi dari child ke parent
    // $posts=Post::with(['author','category'])->get();

    return view('posts',["title"=>"Blog", "posts" => Post::get()]);
});

Route::get("/posts/{post:slug}",function(Post $post){
    return view('post',["title" => "Single post", "post" => $post]);
});

Route::get("/authors/{user:username}",function(User $user){
    // lazy eager loading, load data relasi dari parent ke child
    // $posts=$user->posts->load(['author','category']);
    
    return view('posts',["title" => count($user->posts)." Posted by ".$user->name, "posts" => $user->posts]);
});

Route::get("/categories/{category:slug}",function(Category $category){
    // $posts=$category->posts->load(['author','category']);
    return view('posts',["title" => " Article in: ".$category->name, "posts" => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact',["title"=>"Contact"]);
});