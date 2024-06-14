<?php

/**
 * Ubicación de los componentes de home.
 */

namespace App\View\Components\Home;

use App\Http\Controllers\TipoUsuarioCotroller;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Clase que controla el componente de la página principal (Home).
 * 
 * Esta clase se encarga de gestionar y renderizar la vista de la página principal.
 */

class Home extends Component
{  
    /**
     * El título de la página principal.
     *
     * @var string
     */

    public $title;
    public $menus;

    /**
     * Crea una nueva instancia del componente.
     * 
     * Inicializa el título de la página principal.
     */

    public function __construct()
    {
        $this->title = "Home";
    }

    /**
     * Obtiene la vista o contenido que representa el componente.
     * 
     * Este método devuelve la vista correspondiente a la página principal.
     *
     * @return View|Closure|string La vista del componente de la página principal.
     */

    public function render(): View|Closure|string
    {
        return view('components.home.home',[
            'title' => $this->title,
        ]);
    }
}
