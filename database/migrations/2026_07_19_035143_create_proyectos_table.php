<?php
// Importa la clase base para crear archivos de migración en Laravel
use Illuminate\Database\Migrations\Migration;
// Permite trabajar con las tablas de la base de datos
use Illuminate\Database\Schema\Blueprint;
// Clase anónima que representa esta migración
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     /**
     * Aquí se define la creación de la tabla proyectos.
     */
    public function up(): void
    {
         // Crea una nueva tabla llamada proyectos en la base de datos
        Schema::create('proyectos', function (Blueprint $table) {

            // Campo ID automático
            $table->id();

            // Nombre del proyecto
            $table->string('nombre');

            // Fecha en que inicia el proyecto
            $table->date('fecha_inicio');

            // Estado actual del proyecto
            $table->string('estado');

            // Persona responsable del proyecto
            $table->string('responsable');

            // Monto asignado al proyecto
            $table->decimal('monto', 10, 2);

            // Crea automaticamente los campos created_at y updated_at
            $table->timestamps();
        });
    }

    /**
     * Método que se ejecuta si necesitamos revertir la migración.
     */
    public function down(): void
    {
        // Elimina la tabla proyectos si existe
        Schema::dropIfExists('proyectos');
    }
};
