<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NewUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Alzamora',
            'email' => 'admin@alzamoraasociados.com',
            'password' => Hash::make('alzamora2025#'),
        ])->assignRole('Admin');
    }
}
