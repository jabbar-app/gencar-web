<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'is_admin' => true,
            'name' => 'Jabbar A. P.',
            'email' => 'jabbar@deket.in',
            'password' => bcrypt('Test1234!'),
        ]);

        User::factory()->create([
            'is_admin' => true,
            'name' => 'Dita A. P.',
            'email' => 'dita@generasicakrawala.com',
            'password' => bcrypt('Test1234!'),
        ]);

        User::factory()->create([
            'name' => 'Bukayo Saka',
            'email' => 'user@deket.in',
            'password' => bcrypt('Test1234!'),
        ]);
    }
}
