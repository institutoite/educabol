<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        //\App\Models\User::factory()->count(20)->create(); 

        $users = [
            [
                "role" => User::ADMIN,
                "name" => "David Emanuel",
                "email" => "iteeducabol@gmail.com",
                'email_verified_at' => now(),
                'password' => '$2y$10$P3CHwy7R7.RcboDCkKx4ZOFltzwZarWVjzfn.Nrknc75JrGGb5Fx6', // emanuel1326*
                'remember_token' => Str::random(10),
            ],
            [
                "role" => User::ADMIN,
                "name" => "Edward Carrillo",
                "email" => "eduardcp20@gmail.com",
                'email_verified_at' => now(),
                'password' => '$2y$10$70VoJ.dgpTs0k3d98aqXouDqj3eRmxxTsCo5akCU9o5Lyf50JSNC.', // 11387469
                'remember_token' => Str::random(10),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
