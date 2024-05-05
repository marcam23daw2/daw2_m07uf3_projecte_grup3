@extends('disseny')
@section('content')
<h1>Visualitzar, actualitzar i esborrar informació d'un automovil</h1>
<div class="mt-5">
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>Matricula</td>
          <td>Numero de Bastidor</td>
          <td>Marca</td>
          <td>Model</td>
          <td>Color</td>
          <td>Nombre de Places</td>
          <td>Nombre de Portes</td>
          <td>Grandaria del Maleter (Litres)</td>
          <td>Tipus de Combustible</td>
          <td>Accions sobre la taula</td> 
        </tr>
    </thead>
    <tbody>
        @foreach($dades_AUTOS as $auto)
        <tr>
            <td>{{$auto->matricula_auto}}</td>
            <td>{{$auto->numero_bastidor}}</td>
            <td>{{$auto->marca}}</td>
            <td>{{$auto->model}}</td>
            <td>{{$auto->color}}</td>
            <td>{{$auto->nombre_places}}</td>
            <td>{{$auto->nombre_portes}}</td>
            <td>{{$auto->grandaria_maleter}} L</td>
            <td>{{$auto->tipus_combustible}}</td>
            <td class="text-left">
                <form action="{{ route('autos.destroy', $auto->matricula_auto)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                </form>
                <a href="{{ route('autos.edit', $auto->matricula_auto)}}" class="btn btn-primary btn-sm">Edita</a>
                <a href="{{ route('autos.pdf', $auto->matricula_auto)}}" class="btn btn-secondary btn-sm">Descarregar PDF</a>

            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard_autos') }}">Torna al dashboard de autos</a>
 </div>
@endsection
