@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Planes</h1>
@stop

@section('content')
    <div class="mt-4 mx-4">
        <div class="mt-4 mx-4">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">

                <nav class="realtive w-full overflow-x-auto mb-12 border-b-2 border-light-tail-100 dark:text-dark-navy-500">
                    <ul class="inline-flex">
                <div class="col relative w-full max-w-full flex-grow flex-1 text-right">
                    <button type="button" class="text-gray-900 bg-gradient-to-r
                        from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl
                        focus:ring-4 focus:outline-none focus:ring-red-100
                        dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5
                        text-center mr-2 mb-2">
                        <a href="{{ Route('planes.create') }}">
                            Nuevo Plan
                        </a>
                    </button>
                </div>
                <div class="col relative w-full max-w-full flex-grow flex-1 text-right">
                    <button type="button" class="text-gray-900 bg-gradient-to-r
                        from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl
                        focus:ring-4 focus:outline-none focus:ring-red-100
                        dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5
                        text-center mr-2 mb-2">
                        <a href="{{ Route('coberturas.index') }}">
                            Ver Coberturas
                        </a>
                    </button>
                </div>
                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                    <button type="button" class="text-gray-900 bg-gradient-to-r
                        from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl
                        focus:ring-4 focus:outline-none focus:ring-red-100
                        dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5
                        text-center mr-2 mb-2">
                        <a href="{{ Route('asistencias.index') }}">
                            Ver Asistencias
                        </a>
                    </button>
                </div>

                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                    <button type="button" class="text-gray-900 bg-gradient-to-r
                        from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl
                        focus:ring-4 focus:outline-none focus:ring-red-100
                        dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5
                        text-center mr-2 mb-2">
                        <a href="{{ Route('beneficios.index') }}">
                            Ver Beneficios
                        </a>
                    </button>
                </div>
                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                    <button type="button" class="text-gray-900 bg-gradient-to-r
                        from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl
                        focus:ring-4 focus:outline-none focus:ring-red-100
                        dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5
                        text-center mr-2 mb-2">
                        <a href="{{ Route('pagos.index') }}">
                            Ver Pagos
                        </a>
                    </button>
                </div>
            </ul>
                </nav>
                <div class="w-full overflow-x-auto">

                    <table class="w-full">
                        <thead >
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Nombre</th>
                                <th class="px-4 py-3">Descripcion</th>
                                <th class="px-4 py-3">Costo</th>
                                <th class="px-4 py-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @forelse ($planes as $p)
                                <tr
                                    class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">

                                        </div>
                                        <div>
                                            <p class="font-semibold">{{ $p->name }} </p>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">{{ $p->descripcion }}</td>
                                    <td class="px-4 py-3 text-sm">{{ $p->costo }}</td>

                                    <td class="px-4 py-3 text-xs">
                                        <button type="button" class="text-white bg-gradient-to-r
                                            from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br
                                            focus:ring-4 focus:outline-none focus:ring-blue-300
                                            dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5
                                            text-center mr-2 mb-2">
                                            <a href="{{ Route('planes.edit', $p->id) }}">
                                                EDITAR
                                            </a></button>
                                        <button type="button"
                                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                            <form action="{{ Route('planes.destroy', $p->id) }}" method="POST">
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
@endsection

