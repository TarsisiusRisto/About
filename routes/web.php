<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Tarsisius Risto Ardianto'], ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function( Post $post){
    return view('post', [ 'title' => 'Single Post', 'post' => $post ]);
    // dd($post); // check
});

Route::get('/authors/{user:username}', function( User $user){
    return view('posts', [ 'title' => count($user->posts) . ' Article by ' . $user->name, 'posts' => $user->posts ]);
    // dd($post); // check
});
Route::get('/categories/{category:slug}', function( Category $category){
    return view('posts', [ 'title' => ' Article in: ' . $category->name, 'posts' => $category->posts]);
    // dd($post); // check
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});