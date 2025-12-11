<?php

namespace Database\Seeders;

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
        User::factory(10)->create();
        //Crear un usuario específico para login de prueba
        User::factory()->create([
            'name' => 'Dr. Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('password'),
            'especialidad' => 'Cardiología',
            'telefono' => '0999999999',
            'afiliacion' => 'Hospital San Carlos',
            'nombre_afiliacion' => 'Hospital San Carlos'
        ]);
    }
}
