<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name' => 'Afrial Ivan Pratama',
            'username' => 'afrialivan',
            'email' => 'afrialivan@gmail.com',
            'password' => bcrypt('111')
        ]);

        // User::create([
        //     'name' => 'Althaf Sultan Abdillah',
        //     'email' => 'althaf@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'lorem ipsum Pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minima, alias nobis, laudantium labore a nihil deleniti doloremque veritatis quas minus sed exercitationem possimus in enim mollitia quia temporibus veniam ipsam modi tenetur</p><p> esse ullam! Iusto magnam corrupti optio ea necessitatibus alias in ab ullam suscipit molestiae facere deserunt, repellat totam! Eaque ad temporibus eum quaerat mollitia similique incidunt animi ex delectus? Excepturi esse odio voluptates architecto dolore provident quasi tempore quae nam deleniti dolores praesentium suscipit veniam animi sapiente expedita ducimus, inventore nulla cupiditate cum error? Doloribus ipsam cum amet quae ducimus, maiores possimus corporis enim minus ipsa odio.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-Kedua',
        //     'excerpt' => 'lorem ipsum Kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minima, alias nobis, laudantium labore a nihil deleniti doloremque veritatis quas minus sed exercitationem possimus in enim mollitia quia temporibus veniam ipsam modi tenetur</p><p> esse ullam! Iusto magnam corrupti optio ea necessitatibus alias in ab ullam suscipit molestiae facere deserunt, repellat totam! Eaque ad temporibus eum quaerat mollitia similique incidunt animi ex delectus? Excepturi esse odio voluptates architecto dolore provident quasi tempore quae nam deleniti dolores praesentium suscipit veniam animi sapiente expedita ducimus, inventore nulla cupiditate cum error? Doloribus ipsam cum amet quae ducimus, maiores possimus corporis enim minus ipsa odio.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'lorem ipsum Ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minima, alias nobis, laudantium labore a nihil deleniti doloremque veritatis quas minus sed exercitationem possimus in enim mollitia quia temporibus veniam ipsam modi tenetur</p><p> esse ullam! Iusto magnam corrupti optio ea necessitatibus alias in ab ullam suscipit molestiae facere deserunt, repellat totam! Eaque ad temporibus eum quaerat mollitia similique incidunt animi ex delectus? Excepturi esse odio voluptates architecto dolore provident quasi tempore quae nam deleniti dolores praesentium suscipit veniam animi sapiente expedita ducimus, inventore nulla cupiditate cum error? Doloribus ipsam cum amet quae ducimus, maiores possimus corporis enim minus ipsa odio.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'lorem ipsum Keempat',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minima, alias nobis, laudantium labore a nihil deleniti doloremque veritatis quas minus sed exercitationem possimus in enim mollitia quia temporibus veniam ipsam modi tenetur</p><p> esse ullam! Iusto magnam corrupti optio ea necessitatibus alias in ab ullam suscipit molestiae facere deserunt, repellat totam! Eaque ad temporibus eum quaerat mollitia similique incidunt animi ex delectus? Excepturi esse odio voluptates architecto dolore provident quasi tempore quae nam deleniti dolores praesentium suscipit veniam animi sapiente expedita ducimus, inventore nulla cupiditate cum error? Doloribus ipsam cum amet quae ducimus, maiores possimus corporis enim minus ipsa odio.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);



    }
}
