@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-xl shadow">

        {{-- HEADER --}}
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">
                Listado de cursos
            </h1>

            <a
                href="{{ route('courses.create') }}"
                class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2
                       text-sm font-medium text-white hover:bg-indigo-700
                       focus:outline-none focus:ring-2 focus:ring-indigo-400"
            >
                ➕ Crear curso
            </a>
        </div>

        {{-- FILTROS --}}
        <form
            method="GET"
            action="{{ route('courses.index') }}"
            class="mb-6 grid grid-cols-1 gap-4 sm:grid-cols-4"
        >
            <input
                type="text"
                name="search"
                placeholder="Buscar por título"
                value="{{ request('search') }}"
                class="col-span-1 sm:col-span-2 block w-full rounded-md
                       border-gray-300 shadow-sm
                       focus:border-indigo-500 focus:ring focus:ring-indigo-200"
            >

            <select
                name="level"
                class="block w-full rounded-md border-gray-300 shadow-sm
                       focus:border-indigo-500 focus:ring focus:ring-indigo-200"
            >
                <option value="">Todos los niveles</option>
                <option value="beginner" {{ request('level') == 'beginner' ? 'selected' : '' }}>
                    Beginner
                </option>
                <option value="intermediate" {{ request('level') == 'intermediate' ? 'selected' : '' }}>
                    Intermediate
                </option>
                <option value="advanced" {{ request('level') == 'advanced' ? 'selected' : '' }}>
                    Advanced
                </option>
            </select>

            <div class="flex items-center gap-2">
                <button
                    type="submit"
                    class="inline-flex items-center rounded-md bg-gray-800 px-4 py-2
                           text-sm font-medium text-white hover:bg-gray-900
                           focus:outline-none focus:ring-2 focus:ring-gray-400"
                >
                    Filtrar
                </button>

                <a
                    href="{{ route('courses.index') }}"
                    class="text-sm text-gray-600 hover:text-gray-900"
                >
                    Limpiar
                </a>
            </div>
        </form>

        {{-- TABLA --}}
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 border border-gray-200 rounded-lg">
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                        ID
                    </th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                        Título
                    </th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                        Nivel
                    </th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                        Creado
                    </th>
                </tr>
                </thead>

                <tbody class="divide-y divide-gray-100 bg-white">
                @forelse($courses as $course)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm text-gray-600">
                            {{ $course->id }}
                        </td>
                        <td class="px-4 py-3 text-sm font-medium text-gray-800">
                            {{ $course->title }}
                        </td>
                        <td class="px-4 py-3 text-sm text-gray-600">
                                <span class="inline-flex rounded-full bg-indigo-100 px-2 py-1
                                             text-xs font-medium text-indigo-700">
                                    {{ ucfirst($course->level) }}
                                </span>
                        </td>
                        <td class="px-4 py-3 text-sm text-gray-600">
                            {{ $course->created_at->format('d/m/Y') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-sm text-gray-500">
                            No hay cursos
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        {{-- PAGINACIÓN --}}
        <div class="mt-6">
            {{ $courses->links() }}
        </div>

    </div>
@endsection
