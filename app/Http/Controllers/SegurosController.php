<?php

namespace App\Http\Controllers;

use App\Models\Seguros;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSegurosRequest;
use App\Models\Plane;
use Illuminate\Http\Request;

class SegurosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seguros=Seguros::all();
        return view('VistaSeguros.index',compact('seguros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planes=Plane::all();
        return view('VistaSeguros.create',compact('planes'));
    }

    public function store(Request $request)
    {
        $seguro=new Seguros();
        $seguro->name = $request->name;
        $seguro->descripcion = $request->descripcion;
        $seguro->costo = $request->costo;
        $seguro->id_plan=$request->id_plan;
        $seguro->save();
        return redirect()->route('seguros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seguros  $seguros
     * @return \Illuminate\Http\Response
     */
    public function show(Seguros $seguros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seguros  $seguros
     * @return \Illuminate\Http\Response
     */
    public function edit(Seguros $seguros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSegurosRequest  $request
     * @param  \App\Models\Seguros  $seguros
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSegurosRequest $request, Seguros $seguros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seguros  $seguros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seguros $seguros)
    {
        //
    }
}
