<?php

/**
 * Ubicación de los componentes de barbería.
 * 
 * Esta clase define un componente de vista para la sección de barbería.
 * Se encarga de gestionar el título y los menús específicos de esta sección.
 */

namespace App\View\Components\Barberia;

use App\Http\Controllers\MenuController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Barberia extends Component
{
    /**
     * El título de la sección de barbería.
     *
     * @var string
     */
    
    public $title;

    /**
     * Los menús de la sección de barbería.
     *
     * @var array
     */

    public $menus;

    /**
     * Constructor del componente Barberia.
     *
     * Inicializa el título y los menús llamando a métodos específicos.
     */

    public function __construct()
    {
        $this->title = "Barberia";
        $this->menus = $this->getMenus();
    }

    /**
     * Obtiene los menús específicos para la sección de barbería.
     *
     * Este método utiliza el MenuController para obtener los menús que
     * corresponden a la ruta "Barberia".
     *
     * @return array Los menús correspondientes a la barbería.
     */

    private function getMenus(){
        $menu = new MenuController();
        
        return $menu->getMenusByPath("Barberia");
    }

    /**
     * Renderiza la vista del componente de barbería.
     *
     * @return View|Closure|string La vista del componente de barbería.
     */
    
    public function render(): View|Closure|string
    {
        return view('components.barberia.barberia',[
            'title' => $this->title,
            'menus' => $this->menus
        ]);
    }
}
