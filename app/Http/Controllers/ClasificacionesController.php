<?php

namespace App\Http\Controllers;

use App\Clasificacion;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class ClasificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasificaciones = Clasificacion::all();
        return view('/clasificaciones.index', compact('clasificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/clasificaciones.create');
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
            'nombre' => 'required'
        ]);
        // Clasificacion::create($request->all());

        $clasificacion = Clasificacion::create($request->all());
        Flash::success('Se ha creado el tipo de clasificación "' . $clasificacion->nombre . '" de manera correcta')->important();

        return redirect()->route('clasificaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clasificacion = Clasificacion::findOrFail($id);
        return view('/clasificaciones.edit', compact('clasificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clasificacion = Clasificacion::findOrFail($id);
        return view('/clasificaciones.show', compact('clasificacion'));
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
        // Clasificacion::findOrFail($id)->update($request->all());

        $clasificacion = Clasificacion::findOrfail($id);
        $clasificacion->update($request->all());
        Flash::warning('Se ha editado "' . $clasificacion->nombre . '" de manera correcta')->important();

        return redirect()->route('clasificaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Clasificacion::findOrFail($id)->delete();

        $clasificacion = Clasificacion::findOrFail($id);
        $clasificacion->delete();
        Flash('Se ha eliminado "' . $clasificacion->nombre . '" de manera correcta')->error()->important();

        return redirect()->route('clasificaciones.index');
    }
}
