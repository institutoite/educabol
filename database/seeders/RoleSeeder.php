<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= Role::create(['name' => 'Admin']);
        $teacher= Role::create(['name' => 'Teacher']);
        $student= Role::create(['name' => 'Student']);

        Permission::create(['name' => 'admin.categories'])->assignRole($admin);
        Permission::create(['name' => 'admin.leves'])->assignRole($admin);
        Permission::create(['name' => 'admin.prices'])->assignRole($admin);
        Permission::create(['name' => 'admin.courses'])->assignRole($admin);
        
        Permission::create(['name' => 'instructor.courses'])->syncRoles([$admin, $teacher]);
        Permission::create(['name' => 'instructor.courses.curriculum'])->syncRoles([$admin, $teacher]);
        Permission::create(['name' => 'instructor.courses.goals'])->syncRoles([$admin, $teacher]);
        Permission::create(['name' => 'instructor.courses.students'])->syncRoles([$admin, $teacher]);
        Permission::create(['name' => 'instructor.courses.observation'])->syncRoles([$admin, $teacher]);
    }
}
