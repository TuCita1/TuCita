<?php

/**
 * Ubicación de los componentes de header.
 */

namespace App\View\Components\Common;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use function Laravel\Prompts\alert;

/**
 * Clase que controla el componente del encabezado (header).
 * 
 * Esta clase se encarga de gestionar y renderizar el encabezado común en la aplicación,
 * incluyendo la funcionalidad para redirigir a una ruta específica.
 */

class Header extends Component
{
    /**
     * Texto para el encabezado.
     *
     * @var string
     */

    public $texto;

    /**
     * Menús para el encabezado.
     *
     * @var array
     */

    public $menus;

    /**
     * Crea una nueva instancia del componente.
     * 
     * @param array $menus Los menús a mostrar en el encabezado.
     */

    public function __construct($menus)
    {
        $this->menus = $menus;
    }

    /**
     * Redirige a una ruta específica.
     * 
     * Este método muestra una alerta y luego redirige a la ruta 'cliente'.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */

    public function redirectToRoute()
    {     
        alert("hola")   ;
        return redirect()->route('cliente');
    }

    /**
     * Obtiene la vista o contenido que representa el componente.
     * 
     * Este método devuelve la vista correspondiente al encabezado común.
     *
     * @return View|Closure|string La vista del componente del encabezado.
     */

    public function render(): View|Closure|string
    {
        return view('components.common.header');
    }
}
