<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Afrial Ivan Pratama",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem voluptate ipsam deserunt! Illo beatae neque quidem hic aliquid animi, at sint, ducimus, provident pariatur ea rerum dolorem. Inventore dolore eaque ipsum dicta sunt necessitatibus provident ad, voluptatem, sint facilis nulla? Velit hic iure voluptas accusantium dolor deleniti laboriosam aperiam, sapiente placeat odio nihil aliquam enim mollitia perspiciatis iste dolores aspernatur necessitatibus corporis nesciunt ex quasi ratione. Culpa voluptatibus nisi explicabo architecto possimus assumenda minus, atque debitis eaque, magnam necessitatibus odit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Althaf Sultan Abdillah",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit optio id quidem inventore velit nisi ipsa quibusdam, aliquam illum molestias, neque nobis unde ipsum consectetur autem sint laborum voluptates assumenda?"
        ]
    ];

    // all artinya mengambil semua data
    public static function all()
    {
        // collect = pembungkus array yg memiliki banyak functions
        return collect(self::$blog_posts);
        // kalo bukan static kita pakenya this-> kalo static kita pakenya self::
    }

    public static function find($slug)
    {
        // static itu untuk method contohnya method all
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // };

        // first method untuk mengambil data pertama, ini merupakan salah satu fungsi dari collect
        // return $posts->first();

        // return $posts->firstWhere('slug', $slug); artinya data pertama dimana slugnya sama dengan slug
        return $posts->firstWhere('slug', $slug);
    }
}
