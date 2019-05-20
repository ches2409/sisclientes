<?php

namespace App\Http\Controllers;

use App\Cargo;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::all();
        return view('/cargos.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/cargos.create');
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
            'nombre' => 'required|min:3|unique:cargos'
        ]);
        // Cargo::create($request->all());

        $cargo = Cargo::create($request->all());
        Flash::success('el cargo "' . $cargo->nombre . '" ha sido creado')->important();

        return redirect()->route('cargos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargo = Cargo::findOrFail($id);
        return view('/cargos.edit', compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargo = Cargo::findOrFail($id);
        return view('/cargos.show', compact('cargo'));
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
        // Cargo::findOrFail($id)->update($request->all());

        $cargo = Cargo::findOrfail($id);
        $cargo->update($request->all());
        Flash::warning('el cargo "'.$cargo->nombre.'" ha sido editado')->important();

        return redirect()->route('cargos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Cargo::findOrFail($id)->delete();

        $cargo = Cargo::findOrFail($id);
        $cargo->delete();
        Flash('Se ha eliminado "' . $cargo->nombre . '" de manera correcta')->error()->important();

        return redirect()->route('cargos.index');
    }
}
