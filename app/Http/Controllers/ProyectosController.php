<?php

namespace App\Http\Controllers;

use DB;
use App\Proyecto;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        // $proyectos = DB::table('proyectos')->get();
        return view('/proyectos.proyecto', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('/admin/proyectos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request, [
            'proyecto'=> 'required',
            'tipo_proyecto'=>'required | numeric'
        ]);
        /* DB::table('proyectos')->insert([
            'proyecto' => $request->input('proyecto'),
            'ubicacion' => $request->input('ubicacion'),
            'tipo_proyecto' => $request->input('tipo_proyecto'),
            'descripcion' => $request->input('descripcion'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); */
        Proyecto::create($request->all());
        return redirect()->route('proyectos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        /* $proyecto = DB::table('proyectos')->where('id', $id)->first(); */
        $proyecto = Proyecto::findOrFail($id);
        return view('/proyectos.edit', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        // $proyecto = DB::table('proyectos')->where('id', $id)->first();
        $proyecto = Proyecto::findOrFail($id);
        return view('/proyectos/show', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        /* DB::table('proyectos')->where('id', $id)->update([
            'proyecto' => $request->input('proyecto'),
            'ubicacion' => $request->input('ubicacion'),
            'tipo_proyecto' => $request->input('tipo_proyecto'),
            'descripcion' => $request->input('descripcion'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); */

        /* $proyecto = Proyecto::findOrFail($id);
        $proyecto ->update($request->all()); */

        Proyecto::findOrFail($id)->update($request->all());
        return redirect()->route('proyectos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        // eliminar mensaje
        // DB::table('proyectos')->where('id', $id)->delete();
        Proyecto::findOrFail($id)->delete();
        // redireccionar
        return redirect()->route('proyectos.index');
    }
}
