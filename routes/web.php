<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Tarsisius Risto Ardianto'], ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Tarsisius Risto Ardianto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At quas non fugit dicta, voluptatum minus! Sed tempore aperiam sunt temporibus nostrum. Adipisci optio tenetur fuga, aut accusantium praesentium quas nulla.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Tarsisius Risto Ardianto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At quas non fugit dicta, voluptatum minus! Sed tempore aperiam sunt temporibus nostrum. Adipisci optio tenetur fuga, aut accusantium praesentium quas nulla.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Tarsisius Risto Ardianto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At quas non fugit dicta, voluptatum minus! Sed tempore aperiam sunt temporibus nostrum. Adipisci optio tenetur fuga, aut accusantium praesentium quas nulla.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Tarsisius Risto Ardianto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At quas non fugit dicta, voluptatum minus! Sed tempore aperiam sunt temporibus nostrum. Adipisci optio tenetur fuga, aut accusantium praesentium quas nulla.'
        ]
        ];
        $post = Arr::first( $posts, function($post) use ($slug) {
            return $post['slug'] == $slug;
        });
        return view('post', [ 'title' => 'Single Post', 'post' => $post ]);
        // dd($post); // check
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});