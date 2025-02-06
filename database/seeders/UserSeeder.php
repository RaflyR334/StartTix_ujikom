<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'tanggal_lahir' => 2007-06-02,
            'email' => 'admin@admin.com',
            'password' => bcrypt ('admin123!'),
            'isAdmin' => 1,
        ]);
    }
}
