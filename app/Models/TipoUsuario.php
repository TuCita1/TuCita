<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    use HasFactory;
    protected $table = "tipo_usuario";        
    public $timestamps = false;

    public function usuarios()
    {
        return $this->hasMany(Usuario::class,'Tipo_Usuario_Id','Id');
    }
}
