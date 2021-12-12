<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Edward Carrillo Portillo',
            'email' => 'eduardcp20@gmail.com',
            'password' => bcrypt('11387469')
        ]);

        User::create([
            'name' => 'David Eduardo Flores Beltran',
            'email' => 'informaciones.ite@gmail.com',
            'password' => bcrypt('emanuel1326*')
        ]);

        User::factory(99)->create();
    }
}
