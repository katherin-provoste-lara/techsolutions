<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


// Componente reutilizable encargado de mostrar el valor de la UF.
// Se simula la obtención del dato desde un servicio externo.
class Uf extends Component
{

    // Variable que almacena el valor de la UF que se mostrará en la vista.
    public $valor;


    /**
     * Crea una nueva instancia del componente.
     */
    public function __construct()
    {
        // Simulación del valor recibido desde un servicio externo.
        $this->valor = 39500;
    }


    /**
     * Retorna la vista asociada al componente.
     */
    public function render(): View|Closure|string
    {
        // Carga la vista Blade donde se muestra la información del componente.
        return view('components.uf');
    }
}
