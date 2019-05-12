<?php

namespace App\Http\Controllers;

use App\Dispopago;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class DispopagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispopagos = Dispopago::all();
        // $dispopagos = Dispopago::orderBy('nombre', 'ASC')->paginate(10);
        return view('/dispopagos.index', compact('dispopagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/dispopagos/create');
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
        // Dispopago::create($request->all());

        $dispopago = Dispopago::create($request->all());
        Flash::success('Se ha creado la disponibilidad de pago "' . $dispopago->nombre . '" de manera correcta')->important();

        return redirect()->route('dispopagos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dispopago = Dispopago::findOrFail($id);
        return view('/dispopagos.edit', compact('dispopago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dispopago = Dispopago::findOrFail($id);
        return view('/dispopagos.show', compact('dispopago'));
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
        // Dispopago::findOrFail($id)->update($request->all());

        $dispopago = Dispopago::findOrfail($id);
        $dispopago->update($request->all());
        Flash::warning('Se ha editado "' . $dispopago->nombre . '" de manera correcta')->important();

        return redirect()->route('dispopagos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Dispopago::findOrFail($id)->delete();

        $dispopago = Dispopago::findOrFail($id);
        $dispopago->delete();
        Flash('Se ha eliminado "' . $dispopago->nombre . '" de manera correcta')->error()->important();

        return redirect()->route('dispopagos.index');
    }
}
