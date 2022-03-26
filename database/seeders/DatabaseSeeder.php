<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\User;

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
        User::create([
            'name' => 'daniel',
            'email' => 'daniel@test.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$wItjvHmUHEZt0HwuacDj5OP7w2rGIq8jioE0TppXL./GqP/7uKmrW', // enero2050
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('Admin');
        DB::table('personal_access_tokens')->insert([
            'tokenable_type' => 'App\Models\User',
            'tokenable_id' => '1',
            'name' => 'daniel',
            'token' => 'b55760f4620861191b89e9685bd026699a175ce9edda08d433358132edcf2e14',
            'abilities' => '["read","create","update","delete"]',
            'last_used_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        User::factory(10)->create();
        for ($i=2; $i <12 ; $i++) { 
            $user = User::find($i);
            $user->assignRole('Seller');
        }
        \App\Models\OtherData::factory(50)->create();
        \App\Models\FinancialData::factory(1)->create();
    }
}
