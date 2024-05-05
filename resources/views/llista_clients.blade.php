@extends('disseny')
@section('content')
<h1>Visualitzar, actualitzar i esborrar informació d'un client</h1>
<div class="mt-5">
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>DNI</td>
          <td>Nom i Cognom</td>
          <td>Edat</td>
          <td>Teléfon</td>
          <td>Direcció</td>
          <td>Ciutat</td>
          <td>País</td>
          <td>Email</td>
          <td>Número de permis de conducció</td>
          <td>Punts</td>
          <td>Tipus de tarjeta</td>
          <td>Número de tarjeta</td>
          <td>Accions sobre la taula</td> 
        </tr>
    </thead>
    <tbody>
        @foreach($dades_CLIENTS as $client)
        <tr>
            <td>{{$client->dni_client}}</td>
            <td>{{$client->nom_cognoms}}</td>
            <td>{{$client->edat}}</td>
            <td>{{$client->telefon}}</td>
            <td>{{$client->adreça}}</td>
            <td>{{$client->ciutat}}</td>
            <td>{{$client->pais}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->numero_permis_conduccio}}</td>
            <td>{{$client->punts}}</td>
            <td>{{$client->tipus_targeta}}</td>
            <td>{{$client->numero_targeta}}</td>
            <td class="text-left">
                <form action="{{ route('clients.destroy', $client->dni_client)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                </form>
                <a href="{{ route('clients.edit', $client->dni_client)}}" class="btn btn-primary btn-sm">Edita</a>
                <a href="{{ route('clients.pdf', $client->dni_client)}}" class="btn btn-secondary btn-sm">Descarregar PDF</a>

            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard_clients') }}">Torna al dashboard de clients</a>
 </div>
@endsection
