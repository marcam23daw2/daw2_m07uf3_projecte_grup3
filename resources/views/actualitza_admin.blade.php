@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('users.update', $user->id) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
				<label for="name">Nom</label>
				<input type="text" class="form-control" name="name" value="{{ $user->name }}"/>
			</div>
			<div class="form-group">           
				<label for="role">Rol</label>
				<input type="text" class="form-control" name="role" value="{{ $user->role }}"/>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email" value="{{ $user->email }}"/>
			</div>
			<div class="form-group">
				<label for="password">Contraseña</label>
				<input type="password" class="form-control" name="password" value="{{ $user->password }}"/>
			</div>
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('treballadors') }}">Accés directe a la Llista de Treballadors</a>
@endsection
