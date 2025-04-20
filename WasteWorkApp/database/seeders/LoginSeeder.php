<?php

namespace Database\Seeders;

use App\Models\Login;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Login::factory()->count(5)->create();
    

        Login::create([
            'name' => 'Toni Ecoahto',
            'username' => 'toni',
            'email' => 'toni@example.com',
            'password' => Hash::make('toni123'),
            'role' => 'ecoahto',
    ]);
    }
}
