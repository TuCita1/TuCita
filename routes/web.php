<?php

use Illuminate\Support\Facades\Route;

use App\View\Components\Home\Home;
use App\View\Components\Cliente\Cliente;
use App\View\Components\Login\Login;
use App\View\Components\Proveedor\Proveedor;
use App\View\Components\Spa\Spa;
use App\View\Components\Barberia\Barberia;
use App\View\Components\Salon\Salon;


use App\Http\Controllers\UsuarioCotroller;


Route::get("/", [Home::class,'render'])->name('home');

Route::get("/cliente", [Cliente::class,'render'])->name('cliente');
Route::get("/proveedor", [Proveedor::class,'render'])->name('proveedor');
Route::get("/spa", [Spa::class,'render'])->name('spa');
Route::get("/barberia", [Barberia::class,'render'])->name('barberia');
Route::get("/salon", [Salon::class,'render'])->name('salon');

Route::get("/login", [Login::class,'render'])->name('login');
Route::post("/login.crear", [UsuarioCotroller::class,'create'])->name('login-crear');
Route::post("/login.ingreso", [UsuarioCotroller::class,'ingreso'])->name('login-ingreso');






