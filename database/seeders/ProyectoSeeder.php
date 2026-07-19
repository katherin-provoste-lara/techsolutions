<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyecto;


// Seeder utilizado para cargar proyectos de prueba en la base de datos.
// Permite verificar el funcionamiento del modelo Proyecto.
class ProyectoSeeder extends Seeder
{

    /**
     * Carga datos iniciales para la tabla proyectos.
     */
    public function run(): void
    {
        // Datos de ejemplo para probar el módulo de proyectos.
        Proyecto::create([
            'nombre' => 'Sistema de Gestión Web',
            'fecha_inicio' => '2026-01-15',
            'estado' => 'En desarrollo',
            'responsable' => 'Ana Pérez',
            'monto' => 5000000
        ]);

        Proyecto::create([
            'nombre' => 'Aplicación Móvil Empresarial',
            'fecha_inicio' => '2026-02-10',
            'estado' => 'Planificación',
            'responsable' => 'Carlos Soto',
            'monto' => 8000000
        ]);

        Proyecto::create([
            'nombre' => 'Plataforma de Clientes',
            'fecha_inicio' => '2026-03-05',
            'estado' => 'Finalizado',
            'responsable' => 'María González',
            'monto' => 3500000
        ]);
    }
}
