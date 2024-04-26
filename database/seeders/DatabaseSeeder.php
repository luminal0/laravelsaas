<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Feature;
use App\Models\Package;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'luminal',
            'email' => 'luminalwww@gmail.com',
            'password' => bcrypt('laravelreact123'),
        ]);

        Feature::create([
            'image' => 'https://pngimg.com/d/plus_PNG84.png',
            'route_name' => 'feature1.index',
            'name' => 'Calculate Sum',
            'description' => 'Calculate the sum of two numbers',
            'required_credits' => 3,
            'active' => true,
        ]);

        Feature::create([
            'image' => 'https://pngimg.com/d/plus_PNG84.png',
            'route_name' => 'feature2.index',
            'name' => 'Calculate Difference',
            'description' => 'Calculate the sum of two numbers',
            'required_credits' => 3,
            'active' => true,
        ]);

        Package::create([
            'name' => 'Bronze',
            'price' => 5,
            'credits' => 20,
        ]);

        Package::create([
            'name' => 'Silver',
            'price' => 10,
            'credits' => 50,
        ]);

        Package::create([
            'name' => 'Gold',
            'price' => 20,
            'credits' => 120,
        ]);
    }
}
