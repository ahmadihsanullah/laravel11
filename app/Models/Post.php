<?php
namespace App\Models;

use Illuminate\Support\Arr;
class Post{
    public static function all(): array{
        return [
            [
                'id'=>1,
                'slug'=> 'judul-artikel-1',
                'title'=> 'Judul Artikel 1',
                'author'=> 'Ahmad Ihsanullah',
                'body'=>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, nam assumenda natus est amet eaque libero, minus voluptatem rerum sequi ut enim laborum quasi temporibus quo provident earum neque tempora, quae eos! Eos, perspiciatis cumque quo sit magnam officiis a adipisci. Minima ullam quasi in, excepturi est tempore dignissimos. Nihil."
            ],
            [
                'id'=>2,
                'slug'=> 'judul-artikel-2',
                'title'=> 'Judul Artikel 2',
                'author'=> 'Ahmad Ihsanullah',
                'body'=>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quas ab voluptas explicabo amet dolor, tempore modi, eius nihil labore quia sequi, ipsum fugiat aliquam. Natus aliquam minima adipisci facere. Temporibus tempora necessitatibus odio optio possimus iste nobis fuga voluptatibus alias consequuntur vitae id officiis velit aperiam asperiores harum aliquid ut, repellendus quasi facere suscipit eligendi labore nesciunt molestiae. Quod, assumenda maxime. Magni veritatis, praesentium a commodi mollitia doloribus temporibus ullam, quidem odit dolorum atque, nihil earum in eveniet quos."
            ]   
            ];
    }

    public static function find($slug): array{
        // $post = Arr::first(static::all(), function($post) use ($slug){
        //     return $post['slug'] = $slug;
        // });
        $post = Arr::first(static::all(), fn($post)=> $post['slug']==$slug);

        if(!$post){
            abort(404);
        }

        return $post;
    }
}