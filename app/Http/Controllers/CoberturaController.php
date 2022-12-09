<?php

namespace App\Http\Controllers;

use App\Models\Cobertura;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCoberturaRequest;
use App\Http\Requests\UpdateCoberturaRequest;

use Illuminate\Http\Request;

class CoberturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coberturas=Cobertura::all();
        return view('VistaCobertura.index',compact('coberturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('VistaCobertura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCoberturaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cobertura=new Cobertura();
        $cobertura->name = $request->name;
        $cobertura->descripcion=$request->descripcion;
        $cobertura->save();
        return redirect()->route('coberturas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cobertura  $cobertura
     * @return \Illuminate\Http\Response
     */
    public function show(Cobertura $cobertura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cobertura  $cobertura
     * @return \Illuminate\Http\Response
     */
    public function edit(Cobertura $cobertura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoberturaRequest  $request
     * @param  \App\Models\Cobertura  $cobertura
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCoberturaRequest $request, Cobertura $cobertura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cobertura  $cobertura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cobertura $cobertura)
    {
        //
    }
}
