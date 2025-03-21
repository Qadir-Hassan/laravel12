<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\test_user;

class testSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
           
    test_user::create([
        'name'=>"Qadir",
        'email'=>"Test233@gmail.com",

    ]);
    }
}
