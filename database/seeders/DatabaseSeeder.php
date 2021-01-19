<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Helpers\Image;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('categories');
        Storage::makeDirectory('categories');
        $this->call(CategorySeeder::class);

    }
}
