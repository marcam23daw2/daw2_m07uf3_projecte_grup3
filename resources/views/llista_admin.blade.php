@extends('disseny')
@section('content')
<h1>Visualitzar, actualitzar i esborrar informació d'un treballador</h1>
<div class="mt-5">
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>ID</td>
          <td>Nom</td>
          <td>Rol</td>
          <td>Email</td>
          <td>Darrera hora d'entrada</td>
          <td>Darrera hora de sortida</td>
          <td>Accions sobre la taula</td> 
        </tr>
    </thead>
    <tbody>
        @foreach($dades_USERS as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->role}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->darrera_hora_dentrada}}</td>
            <td>{{$user->darrera_hora_desortida}}</td>
            <td class="text-left">
                <form action="{{ route('users.destroy', $user)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Borrar</button>
                </form>
                <a href="{{ route('users.edit', $user)}}" class="btn btn-primary btn-sm">Editar</a>
                <a href="{{ route('users.pdf', $user)}}" class="btn btn-secondary btn-sm">Descarregar PDF</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard_admin') }}">Tornar al dashboard de l'Administrador</a>
 </div>
@endsection
