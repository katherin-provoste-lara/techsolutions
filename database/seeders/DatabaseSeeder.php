<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Carga datos iniciales para realizar pruebas del sistema.
     */
    public function run(): void
    {
        // Usuario de prueba generado por Laravel.
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Carga proyectos de ejemplo para probar el módulo de proyectos.
        $this->call([
            ProyectoSeeder::class,
        ]);
    }
}
