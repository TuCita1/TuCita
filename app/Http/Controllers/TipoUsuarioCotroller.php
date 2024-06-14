<?php

namespace App\Http\Controllers;

use App\Models\TipoUsuario;


class TipoUsuarioCotroller extends Controller
{
    public function getAll(){
        $tipos = TipoUsuario::all();
        return $tipos;        
    }

    public function getByIdMenus($id){
        $tipos = TipoUsuario::find($id)->menus;
        return $tipos;        
    }
}
