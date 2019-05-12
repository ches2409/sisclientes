<?php

namespace App\Http\Controllers;

use App\Referido;
use Illuminate\Http\Request;

class ReferidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $referidos = referido::all();
        $referidos = Referido::orderBy('nombre', 'ASC')->paginate(10);
        return view('/referidos.index', compact('referidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/referidos/create');
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
        // Referido::create($request->all());

        $referido = Referido::create($request->all());
        Flash::success('Se ha creado el referido "' . $referido->nombre . '" de manera correcta')->important();

        return redirect()->route('referidos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $referido = Referido::findOrFail($id);
        return view('/referidos.edit', compact('referido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $referido = Referido::findOrFail($id);
        return view('/referidos.show', compact('referido'));
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
        // Referido::findOrFail($id)->update($request->all());

        $referido = Referido::findOrfail($id);
        $referido->update($request->all());
        Flash::warning('Se ha editado "' . $referido->nombre . '" de manera correcta')->important();

        return redirect()->route('referidos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Referido::findOrFail($id)->delete();

        $referido = Referido::findOrFail($id);
        $referido->delete();
        Flash('Se ha eliminado "' . $referido->nombre . '" de manera correcta')->error()->important();

        return redirect()->route('referidos.index');
    }
}
