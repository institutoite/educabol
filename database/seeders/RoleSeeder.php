<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'ADMIN']);
        $teacher = Role::create(['name' => 'TEACHER']);
        $student = Role::create(['name' => 'STUDENT']);

        Permission::create(['name' => 'admin.categories'])->assignRole($admin);
        Permission::create(['name' => 'admin.pending'])->assignRole($admin);
        Permission::create(['name' => 'teacher.courses'])->syncRoles([$admin, $teacher]);
        Permission::create(['name' => 'teacher.units'])->syncRoles([$admin, $teacher]);
        Permission::create(['name' => 'teacher.students'])->syncRoles([$admin, $teacher]);


        $admin = User::find(1); 
        $admin->assignRole('ADMIN');

        $admin = User::find(2); 
        $admin->assignRole('ADMIN');

    }
}
