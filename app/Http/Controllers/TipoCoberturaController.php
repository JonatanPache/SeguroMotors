<?php

namespace App\Http\Controllers;

use App\Models\TipoCobertura;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTipoCoberturaRequest;
use App\Http\Requests\UpdateTipoCoberturaRequest;

class TipoCoberturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTipoCoberturaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoCoberturaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoCobertura  $tipoCobertura
     * @return \Illuminate\Http\Response
     */
    public function show(TipoCobertura $tipoCobertura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoCobertura  $tipoCobertura
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoCobertura $tipoCobertura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoCoberturaRequest  $request
     * @param  \App\Models\TipoCobertura  $tipoCobertura
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoCoberturaRequest $request, TipoCobertura $tipoCobertura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoCobertura  $tipoCobertura
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoCobertura $tipoCobertura)
    {
        //
    }
}
