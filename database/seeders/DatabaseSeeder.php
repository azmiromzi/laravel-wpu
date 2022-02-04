<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // User::create([
        //     'name' => 'azmi romzi',
        //     'email' => 'azmiromzihoesaini@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'abdan azzah',
        //     'email' => 'dan@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis iste ratione non eum laudantium aliquid magni modi repudiandae voluptates dolorum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ipsam modi, est quos dolore ex aperiam eaque similique! Ex asperiores rem ut quaerat reiciendis aut dicta dolor nobis qui explicabo quis vero ipsa unde dolore vel quod beatae dolorem labore a hic similique, fugiat non nihil? A placeat, officiis, veritatis dignissimos harum qui adipisci suscipit non, doloremque itaque vitae? Libero culpa, aspernatur ullam enim iusto accusantium non dignissimos voluptatum veritatis dicta repellat quos nemo, alias nisi voluptatibus aliquid totam, eum eligendi. Illo quae deleniti quas eligendi quasi debitis molestias. Repellendus quisquam ea sed, minima iste explicabo ratione amet velit voluptate?',
        //     'category_id' => 1,
        //     'user_id' =>  1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis iste ratione non eum laudantium aliquid magni modi repudiandae voluptates dolorum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ipsam modi, est quos dolore ex aperiam eaque similique! Ex asperiores rem ut quaerat reiciendis aut dicta dolor nobis qui explicabo quis vero ipsa unde dolore vel quod beatae dolorem labore a hic similique, fugiat non nihil? A placeat, officiis, veritatis dignissimos harum qui adipisci suscipit non, doloremque itaque vitae? Libero culpa, aspernatur ullam enim iusto accusantium non dignissimos voluptatum veritatis dicta repellat quos nemo, alias nisi voluptatibus aliquid totam, eum eligendi. Illo quae deleniti quas eligendi quasi debitis molestias. Repellendus quisquam ea sed, minima iste explicabo ratione amet velit voluptate?',
        //     'category_id' => 1,
        //     'user_id' =>  1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis iste ratione non eum laudantium aliquid magni modi repudiandae voluptates dolorum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ipsam modi, est quos dolore ex aperiam eaque similique! Ex asperiores rem ut quaerat reiciendis aut dicta dolor nobis qui explicabo quis vero ipsa unde dolore vel quod beatae dolorem labore a hic similique, fugiat non nihil? A placeat, officiis, veritatis dignissimos harum qui adipisci suscipit non, doloremque itaque vitae? Libero culpa, aspernatur ullam enim iusto accusantium non dignissimos voluptatum veritatis dicta repellat quos nemo, alias nisi voluptatibus aliquid totam, eum eligendi. Illo quae deleniti quas eligendi quasi debitis molestias. Repellendus quisquam ea sed, minima iste explicabo ratione amet velit voluptate?',
        //     'category_id' => 2,
        //     'user_id' =>  1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis iste ratione non eum laudantium aliquid magni modi repudiandae voluptates dolorum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ipsam modi, est quos dolore ex aperiam eaque similique! Ex asperiores rem ut quaerat reiciendis aut dicta dolor nobis qui explicabo quis vero ipsa unde dolore vel quod beatae dolorem labore a hic similique, fugiat non nihil? A placeat, officiis, veritatis dignissimos harum qui adipisci suscipit non, doloremque itaque vitae? Libero culpa, aspernatur ullam enim iusto accusantium non dignissimos voluptatum veritatis dicta repellat quos nemo, alias nisi voluptatibus aliquid totam, eum eligendi. Illo quae deleniti quas eligendi quasi debitis molestias. Repellendus quisquam ea sed, minima iste explicabo ratione amet velit voluptate?',
        //     'category_id' => 2,
        //     'user_id' =>  2
        // ]);
    }
}
