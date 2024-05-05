<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('dashboard_clients') }}">Dashboard Clients</a>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('dashboard_autos') }}">Dashboard Automovils</a>
                </div>
            </div>
            @if(Auth::user()->role == 'admin')
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">                  
                    <a href="{{ url('dashboard_admin') }}">Tornar al Dashboard del Cap de Departament</a>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
