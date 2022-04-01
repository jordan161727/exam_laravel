<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        'name' => 'Macbook Pro',
        'slug' => 'macbook pro',
        'short_description' => '15 inch, 1TB SSD, 32GB Ram',
        'status' => 'active',
        'price' => 249999,
        'image' => 'https://images.unsplash.com/photo-1542496658-e33a6d0d50f6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80',
        ]);

        Product::create([
            'name' => 'Desktop ',
            'slug' => 'desktop ',
            'short_description' => [24, 25, 27][array_rand([24, 25, 27])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
            'status' => 'active',
            'price' => 269999,
            'image' => 'https://images.unsplash.com/photo-1554342872-034a06541bad?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80',
        ]);

        Product::create([
            'name' => 'Phone ',
            'slug' => 'phone',
            'short_description' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [7, 8, 9][array_rand([7, 8, 9])] . ' inch screen, 4GHz Quad Core',
            'status' => 'active',
            'price' => 279999,
            'image' => 'https://images.unsplash.com/photo-1523293182086-7651a899d37f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80',
           
        ]);

        Product::create([
            'name' => 'coffee',
             'slug' => 'coffee',
             'status' => 'active',
            'price' => 100,
            'short_description' => 'Cold Coffee',
            'image' => 'https://images.unsplash.com/photo-1568649929103-28ffbefaca1e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80',
        ]);
    }
}
