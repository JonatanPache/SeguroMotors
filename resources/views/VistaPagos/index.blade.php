@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content_header')
    <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold
        py-2 px-4 border border-gray-400 rounded shadow">
        <a href="{{ Route('planes.index') }}">
            Volver a Planes
        </a>
  </button>
@stop


@section('content')
    <div class="mt-4 mx-4">
        <div class="md:col-span-2 xl:col-span-3">
            <h3 class="text-lg font-semibold">Lista de Pagos</h3>
        </div>
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
                                    <a href="{{ Route('pagos.create') }}">
                                        Nueva Pago
                                    </a>
                                </button>

                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Nombre</th>
                                <th class="px-4 py-3">Descripcion</th>
                                <th class="px-4 py-3">Tasa de Interes</th>
                                <th class="px-4 py-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @forelse ($pagos as $p)
                                <tr
                                    class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div> --}}
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{ $p->name }} </p>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">{{ $p->descripcion }}</td>
                                    <td class="px-4 py-3 text-sm">{{ $p->it }}</td>

                                    <td class="px-4 py-3 text-xs">
                                        <button type="button"
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            <a href="{{ Route('pagos.edit', $p->id_pago) }}">
                                                EDITAR
                                            </a></button>
                                        <button type="button"
                                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                            <form action="{{ Route('pagos.destroy', $p->id_pago) }}" method="POST">
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
