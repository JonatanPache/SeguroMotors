@extends('dashboard')

@section('contenido')
<form action="{{route('planes.update', $plan->id_plan)}}" method="POST" >
    @csrf

    @method('PUT')
    <input type="text" name="id" value="{{$plan->id_plan}}" class="hidden">

    <div class="flex flex-col mt-2">
        <label for="name" class="hidden">Nombre</label>
        <input type="name" name="name" id="name" placeholder="Nombre" value="{{$plan->name}}"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="flex flex-col mt-2">
        <label for="descripcion" class="hidden">Descripcion</label>
        <input type="descripcion" name="descripcion" id="descripcion" placeholder="Descripcion" value="{{$plan->descripcion}}"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="flex flex-col mt-2">
        <label for="costo" class="hidden">Costo</label>
        <input type="costo" name="costo" id="costo" placeholder="Costo" value="{{$plan->costo}}"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <button type="submit"
            class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Editar</button>
</form>
@endsection
