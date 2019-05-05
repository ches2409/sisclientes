<?php

namespace App\Http\Controllers;

use App\Propventa;
use Illuminate\Http\Request;

class PropventasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $propventas = Propventa::all();
        $propventas = Propventa::orderBy('nombre', 'ASC')->paginate(10);
        return view('/propventas.index', compact('propventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/propventas/create');
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
        Propventa::create($request->all());
        return redirect()->route('propventas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $propventa = Propventa::findOrFail($id);
        return view('/propventas.edit', compact('propventa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propventas = Propventa::findOrFail($id);
        return view('/propventas.show', compact('propventas'));
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
        Propventa::findOrFail($id)->update($request->all());
        return redirect()->route('propventas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Propventa::findOrFail($id)->delete();
        Flash::error('Se ha eliminado la propiedad negociable de manera correcta');
        return redirect()->route('propventas.index');
    }
}
