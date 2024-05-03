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
        <form method="post" action="{{ route('clients.update', $dades_CLIENTS->dni_client) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
				<label for="dni_client">DNI Client</label>
				<input type="text" class="form-control" name="dni_client" value="{{ $dades_CLIENTS->dni_client }}" readonly />
			</div>
			<div class="form-group">           
				<label for="nom_cognoms">Nom i Cognoms</label>
				<input type="text" class="form-control" name="nom_cognoms" value="{{ $dades_CLIENTS->nom_cognoms }}"/>
			</div>
			<div class="form-group">           
				<label for="edat">Edat</label>
				<input type="number" class="form-control" name="edat" value="{{ $dades_CLIENTS->edat }}"/>
			</div>
			<div class="form-group">           
				<label for="telefon">Telèfon</label>
				<input type="tel" class="form-control" name="telefon" value="{{ $dades_CLIENTS->telefon }}"/>
			</div>
			<div class="form-group">           
				<label for="adreça">Adreça</label>
				<input type="text" class="form-control" name="adreça" value="{{ $dades_CLIENTS->adreça }}"/>
			</div>
			<div class="form-group">           
				<label for="ciutat">Ciutat</label>
				<input type="text" class="form-control" name="ciutat" value="{{ $dades_CLIENTS->ciutat }}"/>
			</div>
			<div class="form-group">           
				<label for="pais">País</label>
				<input type="text" class="form-control" name="pais" value="{{ $dades_CLIENTS->pais }}"/>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email" value="{{ $dades_CLIENTS->email }}"/>
			</div>
			<div class="form-group">
				<label for="numero_permis_conduccio">Número de permís de conducció</label>
				<input type="text" class="form-control" name="numero_permis_conduccio" value="{{ $dades_CLIENTS->numero_permis_conduccio }}"/>
			</div>
			<div class="form-group">
				<label for="punts">Punts</label>
				<input type="number" class="form-control" name="punts" value="{{ $dades_CLIENTS->punts }}"/>
			</div>
			<div class="form-group">
				<label for="tipus_targeta">Tipus de targeta</label>
				<select name="tipus_targeta">
				    <option value="visa" {{ $dades_CLIENTS->tipus_targeta == "visa" ? 'selected' : ''}}>Visa</option>
				    <option value="debit" {{ $dades_CLIENTS->tipus_targeta == "debit" ? 'selected' : ''}}>Debit</option>
				</select> 
			</div>
			<div class="form-group">
				<label for="numero_targeta">Número de targeta</label>
				<input type="text" class="form-control" name="numero_targeta" value="{{ $dades_CLIENTS->numero_targeta }}"/>
			</div>
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('clients') }}">Accés directe a la Llista de Clients</a
@endsection
