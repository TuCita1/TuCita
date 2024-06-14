<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Fetches menus based on a provided path.
     *
     * This method retrieves all menus from the database that have a matching `Path` attribute
     * to the provided `$path` argument.
     *
     * @param string $path The path to search for in the menus.
     *
     * @return Illuminate\Support\Collection A collection of Menu objects matching the path.
     * 
     * @throws \Illuminate\Database\ModelNotFoundException  if no menus are found for the path
     */
    public function getMenusByPath($path){
        $menus = Menu::where('Path',$path)->get();
        return $menus;        
    }
}
