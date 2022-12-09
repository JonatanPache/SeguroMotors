@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de clientes</h1>
@stop

@section('content')
    <div class="mt-4 mx-4">

        <div class="mt-4 mx-4">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                <button type="button" class="text-gray-900 bg-gradient-to-r
                                    from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl
                                    focus:ring-4 focus:outline-none focus:ring-red-100
                                    dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5
                                    text-center mr-2 mb-2">
                                    <a href="{{ Route('cliente.create') }}">
                                        Nuevo Cliente
                                    </a>
                                </button>

                            </div>
                            {{-- <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                            <a href="{{ Route('cliente.pdf') }}"
                                class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                Imprimir
                            </a>
                        </div> --}}
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">CI</th>
                                <th class="px-4 py-3">Nombre</th>
                                <th class="px-4 py-3">Apellido P.</th>
                                <th class="px-4 py-3">Apellido M.</th>
                                <th class="px-4 py-3">Telefono</th>
                                <th class="px-4 py-3">Dirección</th>
                                <th class="px-4 py-3">Nacimiento</th>
                                <th class="px-4 py-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @forelse ($clientes as $p)
                                <tr
                                    class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3 text-sm">{{ $p->ci }}</td>
                                    <td class="px-4 py-3">
                                        {{ $p->nombre }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">{{ $p->apellido_pa }}</td>
                                    <td class="px-4 py-3 text-sm">{{ $p->apellido_ma }}</td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $p->telefono }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $p->direccion }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $p->fecha_nacimiento }}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        <button type="button" class="text-white bg-gradient-to-r
                                            from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br
                                            focus:ring-4 focus:outline-none focus:ring-blue-300
                                            dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5
                                            text-center mr-2 mb-2">
                                            <a href="{{ Route('cliente.edit', $p->id_user) }}">
                                                EDITAR
                                            </a>
                                        </button>
                                        <button type="button" class="text-white bg-gradient-to-r from-red-400
                                            via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4
                                            focus:outline-none focus:ring-red-300 dark:focus:ring-red-800
                                            font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2
                                            mb-2">
                                            <form action="{{ Route('cliente.destroy', $p->id_user) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="ELIMINAR" class=""
                                                    onclick="return confirm('Desea Eliminar?')">
                                            </form>
                                        </button>

                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div
                    class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <!-- Pagination -->
                </div>
            </div>
        </div>
    </div>
    @stop
