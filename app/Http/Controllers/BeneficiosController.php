<?php

namespace App\Http\Controllers;

use App\Models\Beneficios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateBeneficiosRequest;

class BeneficiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beneficios=Beneficios::get();
        return view('VistaBeneficios.index', compact('beneficios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('VistaBeneficios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBeneficiosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bene=new Beneficios();
        $bene->name=$request->name;
        $bene->descripcion=$request->descripcion;
        $bene->save();
        return redirect()->route('beneficios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beneficios  $beneficios
     * @return \Illuminate\Http\Response
     */
    public function show(Beneficios $beneficios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beneficios  $beneficios
     * @return \Illuminate\Http\Response
     */
    public function edit(Beneficios $beneficios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBeneficiosRequest  $request
     * @param  \App\Models\Beneficios  $beneficios
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBeneficiosRequest $request, Beneficios $beneficios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beneficios  $beneficios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beneficios $beneficios)
    {
        //
    }
}
