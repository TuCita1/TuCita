<?php

/**
 * Ubicación de los componentes de spa.
 * 
 * Esta clase define un componente de vista para la sección de spa.
 * Se encarga de gestionar el título y los menús específicos de esta sección.
 */


namespace App\View\Components\Spa;

use App\Http\Controllers\MenuController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Clase que controla el componente del spa.
 * 
 * Esta clase se encarga de gestionar y renderizar la vista de la sección de spa,
 * incluyendo la obtención de los menús específicos para esta sección.
 */

class Spa extends Component
{
    /**
     * El título de la sección de spa.
     *
     * @var string
     */

    public $title;

    /**
     * Los menús de la sección de spa.
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
        $this->title = "Spa";
        $this->menus = $this->getMenus();                
    }

    /**
     * Obtiene los menús específicos para la sección de spa.
     *
     * Este método utiliza el MenuController para obtener los menús que
     * corresponden a la ruta "Spa".
     *
     * @return array Los menús correspondientes a la sección de spa.
     */

    private function getMenus(){
        $menu = new MenuController();
        
        return $menu->getMenusByPath("Spa");
    }

    /**
     * Obtiene la vista o contenido que representa el componente.
     * 
     * Este método devuelve la vista correspondiente a la sección de spa.
     *
     * @return View|Closure|string La vista del componente de spa.
     */

    public function render(): View|Closure|string
    {
        return view('components.spa.spa',[
            'title' => $this->title,
            'menus' => $this->menus
        ]);
    }
}
