<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
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
        // \App\Models\User::factory(3)->create();

        User::create([
            'fullname' => 'Admin',
            'username' => 'admin',
            'no_hp' => '081234567890',
            'password' => bcrypt('admin'),
            'created_at' => now()
        ]);
    }
}
