<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Administrateur',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'), // 🔐 Change-le après test !
                'email_verified_at' => now(), // Pour éviter l'étape de vérification email
            ]
        );
    }
}
