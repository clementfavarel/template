<?php

namespace Database\Seeders;

use App\Models\Drink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Drink::create([
            'img_src' => '/img/drinks/coca-cola.jpg',
            'img_alt' => 'Coca Cola can',
            'name' => 'Coca Cola',
            'price' => 2.90,
        ]);

        Drink::create([
            'img_src' => '/img/drinks/coca-zero.jpg',
            'img_alt' => 'Coca Cola Zero can',
            'name' => 'Coca Cola Zero',
            'price' => 2.90,
        ]);

        Drink::create([
            'img_src' => '/img/drinks/redbull.jpg',
            'img_alt' => 'Redbull can',
            'name' => 'Redbull',
            'price' => 2.90,
        ]);
    }
}
