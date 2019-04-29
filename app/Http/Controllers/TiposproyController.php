<?php

namespace App\Http\Controllers;


use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TiposproyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $tiposProyectos = DB::table('tiposProyectos')->get();

        return view ('/tiposProyectos/tiposProyectos', compact( 'tiposProyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( '/admin/tiposProyectos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tipo_proyecto'=>'required'
        ]);
        DB::table('tiposProyectos')->insert([
            'tipo_proyecto'=>$request->input('tipo_proyecto'),
            'descripcion'=>$request->input('descripcion'),
            'created_at'=>Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // return back()->with('info', 'los datos del nuevo tipo de proyecto fueron cargados exitosamente.');
        return redirect()->route('tiposProyectos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $tipoProyecto = DB::table('tiposProyectos')->where('id', $id)->first();
        return view('/tiposProyectos.edit', compact('tipoProyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $tipoProyecto = DB::table('tiposProyectos')->where('id', $id)->first();
        return view('/tiposProyectos/show', compact('tipoProyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //actualizar
        DB::table('tiposProyectos')->where('id', $id)->update([
            'tipo_proyecto' => $request->input('tipo_proyecto'),
            'descripcion' => $request->input('descripcion'),
        ]);
        //redireccionar
        return redirect()->route( 'tiposProyectos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // eliminar mensaje
        DB::table('tiposProyectos')->where('id', $id)->delete();
        // redireccionar
        return redirect()->route('tiposProyectos.index');
    }
}
