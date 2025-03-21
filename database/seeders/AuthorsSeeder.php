<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\authors;
class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        authors::create([
            'name'=>"Qadir",
            'email'=>"Test233@gmail.com",

        ]);

        authors::create([
            'name' => fake()->name(),
            'email' => fake()->unique()->email(),
        ]);


    }
}
