<?php

namespace App\Http\Controllers;

use App\Tipocliente;
use Illuminate\Http\Request;

class TipoclientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoclientes = Tipocliente::all();
        return view('/tipoclientes.index', compact('tipoclientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/tipoclientes.create');
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
        Tipocliente::create($request->all());
        return redirect()->route('tipoclientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipocliente = Tipocliente::findOrFail($id);
        return view('/tipoclientes.edit', compact('tipocliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipocliente = Tipocliente::findOrFail($id);
        return view('/tipoclientes.show', compact('tipocliente'));
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
        Tipocliente::findOrFail($id)->update($request->all());
        return redirect()->route('tipoclientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tipocliente::findOrFail($id)->delete();
        return redirect()->route('tipoclientes.index');
    }
}
