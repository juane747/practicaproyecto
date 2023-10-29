
<x-navigationranking-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ranking') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="p-6 bg-white border-b border-gray-800 page-header">
                        <h2 class="text-2xl font-semibold text-center text-green-600 dark:text-green-400 mb-4">
                            Ranking de Usuarios
                        </h2>

                        <table class="min-w-full mt-4 border">
                            <!-- Encabezados de la tabla con fondo gris y texto blanco -->
                            <thead class="bg-green-100 dark:bg-gray-700">
                            <tr>
                                <th class="px-8 py-2 front-bold border">Puesto</th>
                                <th class="px-8 py-2 font-bold border">Mejor Trofeo</th>
                                <th class="px-4 py-2 font-bold border">Nombre de Usuario</th>
                                <th class="px-4 py-2 font-bold border">Correo Electrónico</th>
                                <th class="px-4 py-2 font-bold border">Nivel de Usuario</th>
                            </tr>
                            </thead>
                            <!-- Contenido de la tabla con líneas de borde -->
                            <tbody>
                            @php
                            $contador=0;
                            @endphp
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td class="px-8 py-2 border">{{++$contador}}</td>
                                    <td class="px-8 py-2 border">{{ $usuario->mejortrofeo }}</td>
                                    <td class="px-4 py-2 border">{{ $usuario->name }}</td>
                                    <td class="px-4 py-2 border">{{ $usuario->email }}</td>
                                    <td class="px-4 py-2 border">{{ $usuario->nivelusuario }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-navigationranking-layout>
