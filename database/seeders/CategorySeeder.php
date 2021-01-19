<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Helpers\Image;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "Fisica" => "F35144",
            "Matematica" => "8DBC58",
            "Quimica" => "41B881",
            "Estadistica" => "0CC1E9",
            "Algebra" => "0098B6",
            "Informatica" => "FF9733",
        ];
        foreach($categories as $category => $bg) {
            \App\Models\Category::factory()->create([
                "name" => $category,
                "picture" => Image::image(storage_path('app/public/categories'), $category, $bg, 370, 450, false),
            ]); 
        }
    }
}
