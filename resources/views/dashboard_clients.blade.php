<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ url('clients') }}">Visualitzar, actualitzar i esborrar informació d'un client</a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="{{ url('clients/create') }}">Crea un nou client</a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="{{ url('dashboard') }}">Tornar al dashboard</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>