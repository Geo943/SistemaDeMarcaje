<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marcacion;

class MarcacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcaje = Marcacion::all();
        return $marcaje;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marcaje = new Marcacion();
        $marcaje->id_empleado= $request->id_empleado;
        $marcaje->fecha= $request->fecha;
        $marcaje->hora= $request->hora;

        $marcaje->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $marcaje = Marcacion::findOrFail($request->id);
        $marcaje->id_empleado= $request->id_empleado;
        $marcaje->fecha= $request->fecha;
        $marcaje->hora= $request->hora;

        $marcaje->save();
        return $marcaje;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $marcaje = Marcacion::destroy($request->id);

        return $marcaje;
    }
}
