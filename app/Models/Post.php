<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all(): array
    {
        return [
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
    }

    public static function find($slug): array
    {
        return Arr::first(self::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}
