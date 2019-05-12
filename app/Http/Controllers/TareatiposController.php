<?php

namespace App\Http\Controllers;

use DB;
use App\Tareatipo;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class TareatiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareatipos = Tareatipo::all();
        return view('/tareatipos.index', compact('tareatipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/tareatipos.create');
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
            'tipoTarea' => 'required',
            'area'=>'required'
        ]);
        // $tareatipo=Tareatipo::all();
        // Tareatipo::create($request->all());

        $tareatipo = Tareatipo::create($request->all());
        Flash::success('Se ha creado el tipo de tarea "'.$tareatipo->tipoTarea.'" de manera correcta')->important();

        return redirect()->route('tareatipos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tareatipo = Tareatipo::findOrFail($id);
        return view('/tareatipos.edit', compact('tareatipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tareatipo = Tareatipo::findOrFail($id);
        return view('/tareatipos.show', compact('tareatipo'));
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
        // Tareatipo::findOrFail($id)->update($request->all());

        $tareatipo=Tareatipo::findOrfail($id);
        $tareatipo->update($request->all());
        Flash::warning( 'Se ha editado "'.$tareatipo->tipoTarea.'" de manera correcta')->important();

        return redirect()->route('tareatipos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Tareatipo::findOrFail($id)->delete();

        $tareatipo = Tareatipo::findOrFail($id);
        $tareatipo->delete();
        Flash( 'Se ha eliminado "' . $tareatipo->tipoTarea . '" de manera correcta')->error()->important();

        return redirect()->route( 'tareatipos.index');
    }
}
