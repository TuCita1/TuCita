<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\View\Components\Login\Login;

use function Termwind\render;

class UsuarioCotroller extends Controller
{
    public function create(Request $request){
        $usuario = new Usuario();

        $usuario->Nombre = $request->Nombre;
        $usuario->Apellido = $request->Apellido;
        $usuario->Telefono = $request->Telefono;
        $usuario->Correo = $request->Correo;
        $usuario->Contrasena = $request->Contrasena;
        $usuario->Numero_Documento = $request->Numero_Documento;
        $usuario->Tipo_Usuario_Id = $request->Tipo_Usuario;

        $usuario->save();

        

        return redirect()->route('login');
    }

    public function ingreso(Request $request){
        $correo = $request->Correo;
        $contrasena = $request->Contrasena;

        $user = Usuario::where('Correo', $correo)
                    ->where('Contrasena', $contrasena)
                    ->first();

        if($user){
            if($user->Tipo_Usuario_Id == 1)
            {
                return redirect()->route('cliente');
            }else if($user->Tipo_Usuario_Id == 2)
            {
                return redirect()->route('proveedor');
            } 
        }

        return redirect()->route('login');
    }
}
