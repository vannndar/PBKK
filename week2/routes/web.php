<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['title' => 'Home']);
});

Route::get('/home', function () {
    return view('home', ['nama' => 'Thariq Ivan']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Thariq Ivan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Thariq Ivan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ],
        [
            'id' => 3,
            'slug' => 'judul-artikel-3',
            'title' => 'Judul Artikel 3',
            'author' => 'Thariq Ivan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Thariq Ivan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Thariq Ivan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ],
        [
            'id' => 3,
            'slug' => 'judul-artikel-3',
            'title' => 'Judul Artikel 3',
            'author' => 'Thariq Ivan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ]

    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
