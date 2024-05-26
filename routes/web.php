<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Arief Aryudi Syidik',
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'id' => 1,
                'slug' => 'article-title-1',
                'title' => 'Article Title 1',
                'author' => 'Arief Aryudi Syidik',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, repudiandae! Alias odit exercitationem ratione tempora, veritatis eum repellendus maxime esse. Officiis cum quos eveniet quas suscipit explicabo saepe ipsa maiores!',
            ],
            [
                'id' => 2,
                'slug' => 'article-title-2',
                'title' => 'Article Title 2',
                'author' => 'Arief Aryudi Syidik',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ex eos aut ipsum totam asperiores ab vel omnis explicabo rerum, inventore quo excepturi repellat fuga architecto, corrupti consequuntur perspiciatis. Sunt?',
            ],
        ],
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'article-title-1',
            'title' => 'Article Title 1',
            'author' => 'Arief Aryudi Syidik',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, repudiandae! Alias odit exercitationem ratione tempora, veritatis eum repellendus maxime esse. Officiis cum quos eveniet quas suscipit explicabo saepe ipsa maiores!',
        ],
        [
            'id' => 2,
            'slug' => 'article-title-2',
            'title' => 'Article Title 2',
            'author' => 'Arief Aryudi Syidik',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ex eos aut ipsum totam asperiores ab vel omnis explicabo rerum, inventore quo excepturi repellat fuga architecto, corrupti consequuntur perspiciatis. Sunt?',
        ],
    ];

    $post = Arr::first($posts, fn($post) => $post['slug'] == $slug);

    return view('post', [
        'title' => 'Single Post',
        'post' => $post,
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
