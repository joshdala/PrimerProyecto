<?php

namespace Database\Seeders;

use App\Models\Pagina;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = new User;
        $user->name = 'Alejandro Burgos';
        $user->email = 'alex.burgos2506@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
        User::factory(50)->create();
        Pagina::factory(200)->create();
        // User::factory(10)->create();
        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
