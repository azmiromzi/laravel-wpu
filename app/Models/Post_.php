<?php

namespace App\Models;


class Post
{
   private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Azmi Romzi Hoesaini",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere voluptatibus et quis quisquam recusandae eveniet reiciendis minima officiis? Molestiae beatae, magni ipsum distinctio reprehenderit nemo eveniet illo libero aspernatur totam tempora, eaque dignissimos vero recusandae optio adipisci maxime corporis ab aliquid, natus possimus non minus numquam officiis! Fugiat enim recusandae nihil esse cupiditate? Voluptate aliquam impedit ipsum provident tempore minus veniam fugiat ipsa modi. Ut sunt, quas numquam, in reprehenderit, aliquid minus quibusdam modi sint provident tenetur vitae ab excepturi?"
        ],
        [
         "title" => "Judul Post Kedua",
         "slug" => "judul-post-kedua",
         "author" => "Abdan Muhammad",
         "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere voluptatibus et quis quisquam recusandae eveniet reiciendis minima officiis? Molestiae beatae, magni ipsum distinctio reprehenderit nemo eveniet illo libero aspernatur totam tempora, eaque dignissimos vero recusandae optio adipisci maxime corporis ab aliquid, natus possimus non minus numquam officiis! Fugiat enim recusandae nihil esse cupiditate? Voluptate aliquam impedit ipsum provident tempore minus veniam fugiat ipsa modi. Ut sunt, quas numquam, in reprehenderit"
        ]
     ];

     public static function all() {
        return  collect( self::$blog_posts);
     }

     public static function find($slug) {
        $posts = static::all();
        $post = [];

        return $posts->firstWhere('slug', $slug);
    }
}
