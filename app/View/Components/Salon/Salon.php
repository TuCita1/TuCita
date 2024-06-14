<?php

/**
 * Ubicación de los componentes de salon.
 * 
 * Esta clase define un componente de vista para la sección de salon.
 * Se encarga de gestionar el título y los menús específicos de esta sección.
 */

namespace App\View\Components\Salon;

use App\Http\Controllers\MenuController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Clase que controla el componente del salón.
 * 
 * Esta clase se encarga de gestionar y renderizar la vista de la sección de salón,
 * incluyendo la obtención de los menús específicos para esta sección.
 */

class Salon extends Component
{
    /**
     * El título de la sección de salón.
     *
     * @var string
     */

    public $title;

    /**
     * Los menús de la sección de salón.
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
        $this->title = "Salon";
        $this->menus = $this->getMenus();
    }

    /**
     * Obtiene los menús específicos para la sección de salón.
     *
     * Este método utiliza el MenuController para obtener los menús que
     * corresponden a la ruta "Salon".
     *
     * @return array Los menús correspondientes a la sección de salón.
     */

    private function getMenus(){
        $menu = new MenuController();
        
        return $menu->getMenusByPath("Salon");
    }

    /**
     * Obtiene la vista o contenido que representa el componente.
     * 
     * Este método devuelve la vista correspondiente a la sección de salón.
     *
     * @return View|Closure|string La vista del componente de salón.
     */

    public function render(): View|Closure|string
    {
        return view('components.salon.salon',[
            'title' => $this->title,
            'menus' => $this->menus
        ]);
    }
}
