<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'admin',
        //     'email' => 'admin@beasiswa.com',
        //     'password' => Hash::make('admin123'),
        // ],
        // );

        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@beasiswa.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Wahyu Ahmad Yassin',
                'email' => 'wahyu@gmail.com',
                'password' => Hash::make('bismillah'),
            ]
            ];

        foreach ($user as $key => $value) {
            User::factory()->create($value);
        }
    }
}
