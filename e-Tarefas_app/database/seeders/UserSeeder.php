<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run(): void
    {

        // Gera 10 usuarios com dados ficticios
        $users = User::factory()->count(10)->create();

        // Para cada usuario criado é gerado um perfil e ligando-os com a chave estrangeira
        $users->each(function ($user) {
            Profile::factory()->create(['user_id' => $user->id]);
        });
    }
}
