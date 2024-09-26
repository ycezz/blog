<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Putri Mila',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus adipisci incidunt corrupti dolor consequatur, fuga omnis dolore sequi neque voluptatibus aperiam quod, ea harum, voluptas doloribus? Libero quisquam atque sint.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Putri Mila',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero quisquam laboriosam esse sequi nemo? Id inventore et, maxime temporibus quae quo laborum dolor, magnam, voluptatibus aliquid ipsa ratione voluptate eos.'
            ]
        ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // }); 

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug); 

        if(! $post) {
            abort(404);
        }

        return $post;
    }

}