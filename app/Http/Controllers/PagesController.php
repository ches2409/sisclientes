<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /* public function __construct(){
        return $this->middleware('auth');
    } */
    public function HOME(){
        return view ('/admin.dashboard');
    }
    /* public function USUARIOS(){
        return view('/admin.usuarios');
    } */
    /* public function CLIENTES(){
        return view('/admin.clientes');
    } */
    /* public function PROYECTOS(){
        return view('/admin.proyectos');
    } */
    /* public function ACTIVIDADES(){
        return view('/tareas.index');
    } */
    /* public function NECESIDADESPRIM(){
        return view('/admin.necesidadesPrim');
    } */
    /* public function TIPOSPROYECTOS(){
        return view('/admin/tiposProyectos');
    } */
}
