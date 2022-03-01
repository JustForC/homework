<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Thumbnail;
use App\Models\Snapshot;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Thumbnail::create([
            'name' => "First Thumbnail",
            'path' => '/seeder/thumbnail1.png',
        ]);

        Product::create([
            'name' => 'Hot Latte',
            'category' => 'Minuman',
            'description' => 'Latte hot hot hot',
            'price' => 25000,
            'count' => 30,
            'path' => '/seeder/product1.jpg',
        ]);
        
        Product::create([
            'name' => 'Cappucino',
            'category' => 'Minuman',
            'description' => 'Cappu capu cino wow',
            'price' => 30000,
            'count' => 25,
            'path' => '/seeder/product2.jpg',
        ]);

        Product::create([
            'name' => 'Hot Americano',
            'category' => 'Minuman',
            'description' => 'Hot hot hot americano',
            'price' => 26000,
            'count' => 60,
            'path' => '/seeder/product3.jpg',
        ]);

        Snapshot::create([
            'name' => 'Snapshot 1',
            'path' => '/seeder/snapshot1.jpg',
        ]);

        Snapshot::create([
            'name' => 'Snapshot 2',
            'path' => '/seeder/snapshot2.jpg',
        ]);
    }
}
