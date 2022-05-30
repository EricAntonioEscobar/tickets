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
        $role1 = Role::create(['name' => 'SuperAdmin']);
        $role2 = Role::create(['name' => 'admin']);
        $role3 = Role::create(['name' => 'empleado']);

        Permission::create(['name' => 'super_administrador.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.index'])->assignRole($role2);
        Permission::create(['name' => 'home'])->assignRole($role3);
  }
}
