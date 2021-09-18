<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
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
        User::factory(3)->create();
        Post::factory(15)->create();
        Category::create([
            'name' => 'Clay Ceramic',
            'slug' => 'guci-kinasih'
        ]);
        Category::create([
            'name' => 'Keramik Guci',
            'slug' => 'gelas-kinasih'
        ]);
        Category::create([
            'name' => 'Glass',
            'slug' => 'aksesoris-kinasih'
        ]);
        // User::create([
        //     'name' => 'Auliya Oni Priyandika',
        //     'username'=>'auliya-oni-priyandika',
        //     'email' => 'oniauliya99@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Abdul Rahman Saleh',
        //     'username'=>'abdul-rahman-saleh',
        //     'email' => 'aarash123@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, dicta! Lorem ipsum dolor sit amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta corrupti autem nisi doloremque dolorem ullam laudantium corporis dignissimos ipsum molestias earum vitae impedit, tenetur alias eligendi omnis? </p><p>Nihil optio omnis corporis animi soluta! Cumque aliquam fuga et ullam voluptatum perspiciatis minima earum a enim, aliquid, veniam absequi ipsum.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, dicta! Lorem ipsum dolor sit amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta corrupti autem nisi doloremque dolorem ullam laudantium corporis dignissimos ipsum molestias earum vitae impedit, tenetur alias eligendi omnis? </p><p>Nihil optio omnis corporis animi soluta! Cumque aliquam fuga et ullam voluptatum perspiciatis minima earum a enim, aliquid, veniam absequi ipsum.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, dicta! Lorem ipsum dolor sit amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta corrupti autem nisi doloremque dolorem ullam laudantium corporis dignissimos ipsum molestias earum vitae impedit, tenetur alias eligendi omnis? </p><p>Nihil optio omnis corporis animi soluta! Cumque aliquam fuga et ullam voluptatum perspiciatis minima earum a enim, aliquid, veniam absequi ipsum.</p>'
        // ]);
    
    }
}