<?php

/**
 * Ubicación de los componentes de proveedor.
 * 
 * Esta clase define un componente de vista para la sección de proveedor.
 */

namespace App\View\Components\Proveedor;

use App\Http\Controllers\MenuController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Clase que controla el componente del proveedor.
 * 
 * Esta clase se encarga de gestionar y renderizar la vista de la sección de proveedores,
 * incluyendo la obtención de los menús específicos para esta sección.
 */

class Proveedor extends Component
{
    /**
     * El título de la sección de proveedores.
     *
     * @var string
     */

    public $title;

    /**
     * Los menús de la sección de proveedores.
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
        $this->title = "Proveedor";
        $this->menus = $this->getMenus();
    }

        /**
     * Obtiene los menús específicos para la sección de proveedores.
     *
     * Este método utiliza el MenuController para obtener los menús que
     * corresponden a la ruta "Proveedor".
     *
     * @return array Los menús correspondientes a la sección de proveedores.
     */

    private function getMenus(){
        $menu = new MenuController();
        
        return $menu->getMenusByPath("Proveedor");
    }

    /**
     * Obtiene la vista o contenido que representa el componente.
     * 
     * Este método devuelve la vista correspondiente a la sección de proveedores.
     *
     * @return View|Closure|string La vista del componente de proveedores.
     */

    public function render(): View|Closure|string
    {
        return view('components.proveedor.proveedor',[
            'title' => $this->title,
            'menus' => $this->menus
        ]);
    }
}
