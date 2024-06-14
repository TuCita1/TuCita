<?php

/**
 * Ubicación de los componentes de login.
 */

namespace App\View\Components\Login;

use Closure;
use App\Http\Controllers\TipoUsuarioCotroller;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Clase que controla el componente de inicio de sesión (Login).
 * 
 * Esta clase se encarga de gestionar y renderizar la vista del formulario de inicio de sesión,
 * incluyendo la obtención de los tipos de usuarios.
 */

class Login extends Component
{
    /**
     * Los tipos de usuarios disponibles para el inicio de sesión.
     *
     * @var array
     */

    public $userTypes;

    /**
     * Crea una nueva instancia del componente.
     * 
     * Inicializa los tipos de usuarios llamando a un método específico.
     */

    public function __construct()
    {
        
        $this->userTypes = $this->getTypeUsers();
    }

    /**
     * Obtiene los tipos de usuarios disponibles.
     * 
     * Este método utiliza el TipoUsuarioController para obtener todos los tipos de usuarios
     * y elimina un tipo específico (índice 2) de la lista.
     *
     * @return array Los tipos de usuarios disponibles para el inicio de sesión.
     */

    private function getTypeUsers(){
        $tipoUsuario = new TipoUsuarioCotroller();
        $tipos = $tipoUsuario->getAll();
        unset($tipos[2]);
        return $tipos;
    }

    /**
     * Obtiene la vista o contenido que representa el componente.
     * 
     * Este método devuelve la vista correspondiente al formulario de inicio de sesión.
     *
     * @return View|Closure|string La vista del componente de inicio de sesión.
     */

    public function render(): View|Closure|string
    {
        return view('components.login.login',[
            'userTypes' => $this->userTypes,
        ]);
    }
}
