<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes=Cliente::get();
        return view('VistaClientes.index', compact('clientes'));
    }


    public function create()
    {
        return view('VistaClientes.create');
    }


    public function store(Request $r)
    {
        $id=1;
        $cliente=new Cliente();
        $cliente->nombre = $r->nombre;
        $cliente->ci = $r->ci;
        $cliente->apellido_pa = $r->apellido_pa;
        $cliente->apellido_ma = $r->apellido_ma;
        $cliente->telefono = $r->telefono;
        $cliente->direccion = $r->direccion;
        $cliente->fecha_nacimiento = $r->fecha_nac;
        $user=new User();
        $user->name=$r->nombre;
        $user->email = $r->email;
        $user->password = $r->password;
        $user->id_tipo_user=$id;
        $user->gender=$r->gender;
        $id_user=$user->save();
        $cliente->id_user=$id_user;
        $cliente->save();
        return redirect()->route('cliente.index');
    }


    public function show(Cliente $cliente)
    {
        //
    }


    public function edit($id)
    {
        $cliente = Cliente::where('id_user', $id)->first();
        return view('VistaClientes.edit', compact('cliente'));
    }

    public function update(Request $r, Cliente $cliente)
    {
        $cliente->id_user = $r->id_user;
        $cliente->nombre = $r->nombre;
        $cliente->apellido_pa = $r->apellido;
        $cliente->apellido_ma = $r->ape_materno;
        $cliente->telefono = $r->tel;
        $cliente->direccion = $r->direc;
        $cliente->fecha_nacimiento = $r->fechanaci;
        $cliente->save();
        return redirect()->route('cliente.index');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
