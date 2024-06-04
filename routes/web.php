<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => "Shandika David Ardiansyah", 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => '1',
            'title' => 'Judul Artikel 1',
            'author' => 'Shandika David Ardiansyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.'
        ],
        [
            'id' => '2',
            'title' => 'Judul Artikel 2',
            'author' => 'Shandika David Ardiansyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
        [
            'id' => '1',
            'title' => 'Judul Artikel 1',
            'author' => 'Shandika David Ardiansyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.'
        ],
        [
            'id' => '2',
            'title' => 'Judul Artikel 2',
            'author' => 'Shandika David Ardiansyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.'
        ]
    ];

    $post = Arr::first($posts, function($post) use($id) {
        return $post['id'] == $id;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
