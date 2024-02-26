<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'htetshinelinn',
            'email' => 'htetshinelinn14@gmail.com',
            'phone' => '09671469097',
            'password' => bcrypt('123'),
            'is_admin' => '1'
        ]);
    }
}