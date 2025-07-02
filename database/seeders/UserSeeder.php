<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'writer@example.com'], 
            [
                'name' => 'Penulis Satu',
                'google_id' => null,
                'google_drive_token' => null,
                'google_drive_refresh_token' => null,
            ]
        );
    }
}
