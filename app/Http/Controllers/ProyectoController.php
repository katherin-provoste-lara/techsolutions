<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use League\Uri\StringCoercionMode;

class ProyectoController extends Controller
{
    #Array que simula la base de datos de proyectos.
    protected array $proyectos = [];

    public function __construct()
    {
        $this->proyectos = [
            new Proyecto([
                'id' => 1,
                'nombre' => 'Sistema de inventario',
                'fecha_inicio' => '2026-07-01',
                'estado' => 'En progreso',
                'responsable' => 'Juan Pérez',
                'monto' => 1000000
            ]),
            new Proyecto([
                'id' => 2,
                'nombre' => 'Portal de clientes',
                'fecha_inicio' => '2026-08-15',
                'estado' => 'Pendiente',
                'responsable' => 'María López',
                'monto' => 750000
            ]),
        ];
    }

    public function index() #muestra todos los proyectos
    {
        $valorUF = $this->calcularUF('2026-07-15'); #Simulación de obtener el valor de la UF

        return view('proyectos.index')
            ->with('proyectos', $this->proyectos) #se pasa la lista de proyectos a la vista
            ->with('valorUF', $valorUF);
    }

    public function create() #muestra el formulario para crear un nuevo proyecto
    {
        return view('proyectos.create');
    }

    public function store(Request $request) #guarda un nuevo proyecto en la base de datos
    {
        return redirect()->route('proyectos.index');
    }

    public function show(int $proyecto) #muestra un proyecto específico
    {
        return view('proyectos.show')
            ->with('proyecto', $this->proyectos[$proyecto - 1]); #se pasa el proyecto específico a la vista
    }

    public function edit(int $proyecto) #muestra el formulario para editar un proyecto específico
    {
        return view('proyectos.edit')
            ->with('proyecto', $this->proyectos[$proyecto - 1]);
    }

    public function update(Request $request, $id) #actualiza un proyecto específico con los datos enviados desde el formulario de edición
    {
        return redirect()->route('proyectos.index');
    }

    public function destroy(int $proyecto) #elimina un proyecto específico de la base de datos
    {
        return redirect()->route('proyectos.index');
    }

    function calcularUF(string $fecha): float #simula la obtención del valor de la UF para una fecha específica
    {
        #Valores de ejemplo por fechas
        $valoresUF = [
            '2026-07-01' => 38245.67,
            '2026-07-15' => 38312.40,
            '2026-08-01' => 38401.15,
        ];

        return $valoresUF[$fecha] ?? 0.0;
    }

    public function confirmarEliminar(int $proyecto)
    {
        return view('proyectos.delete')
            ->with('proyecto', $this->proyectos[$proyecto - 1]);
    }
}
