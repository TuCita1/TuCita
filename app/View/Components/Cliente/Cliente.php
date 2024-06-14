<?php

/**
 * Ubicación de los componentes de cliente.
 * 
 * Esta clase define un componente de vista para la sección de cliente.
 */

namespace App\View\Components\Cliente;

use App\Http\Controllers\MenuController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Clase que controla el componente de cliente.
 * 
 * Esta clase se encarga de gestionar el título y los menús específicos para
 * la sección de cliente.
 */

class Cliente extends Component
{
    /**
     * El título de la sección de cliente.
     *
     * @var string
     */

    public $title;

    /**
     * Los menús de la sección de cliente.
     *
     * @var array
     */

    public $menus;

    /**
     * Crea una nueva instancia del componente.
     * 
     * Inicializa el título y los menús llamando a métodos específicos.
     */

    public function __construct()
    {

        $this->title = "Cliente";
        $this->menus = $this->getMenus();
    }

    /**
     * Obtiene los menús específicos para la sección de cliente.
     *
     * Este método utiliza el MenuController para obtener los menús que
     * corresponden a la ruta "Cliente".
     *
     * @return array Los menús correspondientes a la sección de cliente.
     */

    private function getMenus()
    {
        $menu = new MenuController();
        return $menu->getMenusByPath("Cliente");
    }

    /**
     * Obtiene la vista o contenido que representa el componente.
     * 
     * Este método devuelve la vista correspondiente a la sección de cliente.
     *
     * @return View|Closure|string La vista del componente de cliente.
     */
    
    public function render(): View|Closure|string
    {
        return view('components.cliente.cliente',[
            'title' => $this->title,
            'menus' => $this->menus
        ]);
    }
}
