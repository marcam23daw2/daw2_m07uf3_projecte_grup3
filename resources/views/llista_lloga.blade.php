@extends('disseny')
@section('content')
<h1>Visualitzar, actualitzar i esborrar informació d'un Lloguer</h1>
<div class="mt-5">
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>DNI del Client</td>
          <td>Matricula del Automovil</td>
          <td>Data del Prestec</td>
          <td>Data de Devolucio</td>
          <td>Lloc de Devolucio</td>
          <td>Preu per Dia</td>
          <td>Prestec amb Retorn de Diposit Ple</td>
          <td>Tipus de Asseguranca</td>
          <td>Accions sobre la taula</td> 
        </tr>
    </thead>
    <tbody>
        @foreach($dades_LLOGA as $lloga)
        <tr>
            <td>{{$lloga->dni_client}}</td>
            <td>{{$lloga->matricula_auto}}</td>
            <td>{{$lloga->data_prestec}}</td>
            <td>{{$lloga->data_devolucio}}</td>
            <td>{{$lloga->lloc_devolucio}}</td>
            <td>{{$lloga->preu_dia}} €</td>
            <td>{{$lloga->prestec_retorn_diposit_ple == 1 ? 'Sí' : 'No' }}</td>
            <td>{{$lloga->tipus_asseguranca}}</td>
            <td class="text-left">
                <form action="{{ route('lloga.destroy', [$lloga->dni_client, $lloga->matricula_auto])}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                </form>
                <a href="{{ route('lloga.edit', [$lloga->dni_client, $lloga->matricula_auto])}}" class="btn btn-primary btn-sm">Edita</a>
                <a href="{{ route('lloga.pdf', [$lloga->dni_client, $lloga->matricula_auto])}}" class="btn btn-secondary btn-sm">Descarregar PDF</a>

            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard_lloga') }}">Torna al dashboard de lloga</a>
 </div>
@endsection
