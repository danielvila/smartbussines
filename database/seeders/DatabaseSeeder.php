<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(RoleSeeder::class);
        \App\Models\Client::factory(50)->create();       
        \App\Models\Zone::factory(99)->create();
        \App\Models\User::factory(10)->create();
        $this->call(MydataSeeder::class);
        \App\Models\OtherData::factory(50)->create();
        \App\Models\FinancialData::factory(1)->create();
        \App\Models\Supplier::factory(50)->create();
        \App\Models\SupplierFinancial::factory(1)->create();
        \App\Models\Department::factory(1)->create();
        \App\Models\Group::factory(1)->create();
        \App\Models\Line::factory(1)->create();
        \App\Models\Trademark::factory(1)->create();
        \App\Models\Itbmsbuy::factory(1)->create();
        \App\Models\Itbmssale::factory(1)->create();
        \App\Models\Product::factory(100)->create();
    }
}
