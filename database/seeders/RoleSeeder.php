<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $admin = Role::create(['name' => 'Admin']);
        $seller = Role::create(['name' => 'Seller']);

        Permission::create(['name' => 'clients.index'])->syncRoles([$admin, $seller]);;
        Permission::create(['name' => 'clients.create'])->syncRoles([$admin, $seller]);;
        Permission::create(['name' => 'clients.edit'])->syncRoles([$admin, $seller]);;
        Permission::create(['name' => 'clients.destroy'])->syncRoles([$admin, $seller]);;
    }
}
