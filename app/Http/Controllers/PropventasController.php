<?php

namespace App\Http\Controllers;

use App\Propventa;
use Laracasts\Flash\Flash;
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
        $propventas = Propventa::orderBy('id', 'ASC')->paginate(10);
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
        // Propventa::create($request->all());

        $propventa = Propventa::create($request->all());
        Flash::success('Se ha creado la propiedad negociable "' . $propventa->nombre . '" de manera correcta')->important();

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
        // Propventa::findOrFail($id)->update($request->all());

        $propventa = Propventa::findOrfail($id);
        $propventa->update($request->all());
        Flash::warning('Se ha editado "' . $propventa->nombre . '" de manera correcta')->important();

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
        // Propventa::findOrFail($id)->delete();

        $propventa = Propventa::findOrFail($id);
        $propventa->delete();
        Flash('Se ha eliminado "' . $propventa->nombre . '" de manera correcta')->error()->important();

        return redirect()->route('propventas.index');
    }
}
