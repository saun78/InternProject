<?php

namespace Database\Seeders;

use App\Models\products;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       products::create([
            "name"=>"brocoli",
            "price"=>"21",
            "gram"=>"1000",
            "picture"=>"images/img-4.png",
            "description"=>"is a vegetable",
       ]);

       products::create([
            "name"=>"qpple",
            "price"=>"12",
            "gram"=>"1000",
            "picture"=>"images/img-4.png",
            "description"=>"is a vegetable",
       ]);

        products::create([
            "name"=>"pepper",
            "price"=>"35",
            "gram"=>"1000",
            "picture"=>"images/img-4.png",
            "description"=>"is a vegetable",
        ]);

    }
}
