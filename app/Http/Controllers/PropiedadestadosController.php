<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propiedadestado;

class PropiedadestadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propiedadestados = Propiedadestado::all();
        return view('/propiedadestados.index', compact('propiedadestados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/propiedadestados.create');
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
        Propiedadestado::create($request->all());
        return redirect()->route('propiedadestados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $propiedadestado = Propiedadestado::findOrFail($id);
        return view('/propiedadestados.edit', compact('propiedadestado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propiedadestado = Propiedadestado::findOrFail($id);
        return view('/propiedadestados.show', compact('propiedadestado'));
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
        Propiedadestado::findOrFail($id)->update($request->all());
        return redirect()->route('propiedadestados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Propiedadestado::findOrFail($id)->delete();
        return redirect()->route('propiedadestados.index');
    }
}
