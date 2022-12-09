<?php

namespace App\Http\Controllers;

use App\Models\Asistencias;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAsistenciasRequest;

class AsistenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencias=Asistencias::get();
        return view('VistaAsistencia.index', compact('asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('VistaAsistencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAsistenciasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bene=new Asistencias();
        $bene->name=$request->name;
        $bene->descripcion=$request->descripcion;
        $bene->save();
        return redirect()->route('asistencias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asistencias  $asistencias
     * @return \Illuminate\Http\Response
     */
    public function show(Asistencias $asistencias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asistencias  $asistencias
     * @return \Illuminate\Http\Response
     */
    public function edit(Asistencias $asistencias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAsistenciasRequest  $request
     * @param  \App\Models\Asistencias  $asistencias
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAsistenciasRequest $request, Asistencias $asistencias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asistencias  $asistencias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistencias $asistencias)
    {
        //
    }
}
