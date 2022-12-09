<?php

namespace App\Http\Controllers;

use App\Models\Asistencias;
use App\Models\Beneficios;
use App\Models\Cobertura;
use App\Models\Pagos;
use App\Models\Plane;
use App\Models\Planes_Has_Cobertura;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
    public function index()
    {
        $planes=Plane::get();
        return view('VistaPlanes.index',compact('planes'));
    }

    public function create()
    {
        $pagos=Pagos::all();
        $coberturas=Cobertura::all();
        $asistencias=Asistencias::all();
        $beneficios=Beneficios::all();
        return view('VistaPlanes.create',compact('pagos','coberturas','asistencias','beneficios'));
    }

    public function store(Request $request)
    {
        $plan=new Plane();
        $plan->name = $request->name;
        $plan->descripcion = $request->descripcion;
        $plan->costo = $request->costo;
        $plan->idPago=$request->id_pago;
        $id_plan=$plan->save();
        $plan->coberturas()->attach($request->input('coberturas'));
        return redirect()->route('planes.index');
    }

    public function show(Plane $plane)
    {
        //
    }


    public function edit($id)
    {
        $plan = Plane::where('id_plan', $id)->first();
        return view('VistaPlanes.edit', compact('plan'));
    }

    public function update(Request $request, Plane $plane)
    {
        $plane->name = $request->name;
        $plane->descripcion = $request->descripcion;
        $plane->costo = $request->costo;
        $plane->save();
        return redirect()->route('planes.index');
    }

    public function destroy(Plane $plane)
    {
        $plane->delete();
        return redirect()->route('planes.index');
    }
}
