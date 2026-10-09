<?php

namespace App\Http\Controllers;

use App\Models\Pagina;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function empresa()
    {
        $datos['nombre'] = 'Alex Burgos';
        $datos['fecha'] = 'hoy';
        $datos['actividad'] = 'hola';
        $datos['descripcion_about'] = 'Alex Burgos';
        $datos['texto_ejemplo'] = 'ola';
        $usuarios = new Pagina;
        $datos['listadousuarios'] = $usuarios->ObtenerListado();

        return view('empresa', $datos);
    }
    //
}
