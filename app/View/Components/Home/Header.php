<?php

/**
 * Ubicación de los componentes de header.
 * 
 * Esta clase define un componente de vista para el header de la página principal.
 */

namespace App\View\Components\Home;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Clase que controla el header del home.
 * 
 * Este componente se encarga de renderizar el header de la página principal.
 */

class Header extends Component
{
    /**
     * Crea una nueva instancia del componente.
     * 
     * Este constructor no toma ningún parámetro y no realiza ninguna inicialización
     * específica ya que este componente es estático.
     */

    public function __construct()
    {
        // No se necesita ninguna inicialización específica en este caso
    }

    /**
     * Obtiene la vista o contenido que representa el componente.
     * 
     * Este método devuelve la vista correspondiente al header de la página principal.
     *
     * @return View|Closure|string La vista del componente de header.
     */
    
    public function render(): View|Closure|string
    {
        return view('components.home.header');
    }
}
