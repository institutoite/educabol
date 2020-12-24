<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*Storage::deleteDirectory('courses');
        Storage::deleteDirectory('users');

        Storage::makeDirectory('courses');
        Storage::makeDirectory('users');*/

        factory(\App\Role::class, 1)->create(['name' => 'admin']);
        factory(\App\Role::class, 1)->create(['name' => 'teacher']);
        factory(\App\Role::class, 1)->create(['name' => 'student']);

	    factory(\App\Level::class, 1)->create(['name' => 'Beginner']);
	    factory(\App\Level::class, 1)->create(['name' => 'Intermediate']);
	    factory(\App\Level::class, 1)->create(['name' => 'Advanced']);
    }
}
