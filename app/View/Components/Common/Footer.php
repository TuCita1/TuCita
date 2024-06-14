<?php

/**
 * Ubicación de los componentes de footer.
 */

namespace App\View\Components\Common;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Clase que controla el componente del pie de página (footer).
 * 
 * Esta clase se encarga de renderizar la vista del pie de página común
 * en la aplicación.
 */

class Footer extends Component
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
     * Este método devuelve la vista correspondiente al pie de página común.
     *
     * @return View|Closure|string La vista del componente del pie de página.
     */
    
    public function render(): View|Closure|string
    {
        return view('components.common.footer');
    }
}
