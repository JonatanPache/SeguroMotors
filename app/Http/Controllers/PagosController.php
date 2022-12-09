<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pagos;
use App\Models\Tiempo;
use Illuminate\Http\Request;

class PagosController extends Controller
{
    public function index()
    {
        $pagos=Pagos::get();
        return view('VistaPagos.index', compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiempos=Tiempo::all();
        return view('VistaPagos.create',compact('tiempos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAsistenciasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bene=new Pagos();
        $bene->name=$request->name;
        $bene->descripcion=$request->descripcion;
        $bene->it=$request->it;
        $bene->id_tiempo=$request->id_tiempo;
        $bene->save();
        return redirect()->route('pagos.index');
    }
}
