<?php

namespace App\Http\Controllers;

use App\Tiempoinversion;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class TiempoinversionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiempoinversiones = Tiempoinversion::all();
        return view('/tiempoinversiones.index', compact('tiempoinversiones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/tiempoinversiones.create');
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
        // Tiempoinversion::create($request->all());

        $tiempoinversion = Tiempoinversion::create($request->all());
        Flash::success('Se ha creado el tiempo de interes "' . $tiempoinversion->nombre . '" de manera correcta')->important();

        return redirect()->route('tiempoinversiones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiempoinversion = Tiempoinversion::findOrFail($id);
        return view('/tiempoinversiones.edit', compact('tiempoinversion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiempoinversion = Tiempoinversion::findOrFail($id);
        return view('/tiempoinversiones.show', compact('tiempoinversion'));
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
        // Tiempoinversion::findOrFail($id)->update($request->all());

        $tiempoinversion = Tiempoinversion::findOrfail($id);
        $tiempoinversion->update($request->all());
        Flash::warning('Se ha editado "' . $tiempoinversion->nombre . '" de manera correcta')->important();

        return redirect()->route('tiempoinversiones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Tiempoinversion::findOrFail($id)->delete();

        $tiempoinversion = Tiempoinversion::findOrFail($id);
        $tiempoinversion->delete();
        Flash('Se ha eliminado "' . $tiempoinversion->nombre . '" de manera correcta')->error()->important();

        return redirect()->route('tiempoinversiones.index');
    }
}
