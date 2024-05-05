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
        <form method="post" action="{{ route('autos.update', $dades_AUTOS->matricula_auto) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
				<label for="matricula_auto">Matrícula</label>
				<input type="text" class="form-control" name="matricula_auto" value="{{ $dades_AUTOS->matricula_auto }}" readonly />
			</div>
			<div class="form-group">           
				<label for="numero_bastidor">Número de Bastidor</label>
				<input type="text" class="form-control" name="numero_bastidor" value="{{ $dades_AUTOS->numero_bastidor }}"/>
			</div>
			<div class="form-group">           
				<label for="marca">Marca</label>
				<input type="text" class="form-control" name="marca" value="{{ $dades_AUTOS->marca }}"/>
			</div>
			<div class="form-group">           
				<label for="model">Model</label>
				<input type="text" class="form-control" name="model" value="{{ $dades_AUTOS->model }}"/>
			</div>
			<div class="form-group">           
				<label for="color">Color</label>
				<input type="text" class="form-control" name="color" value="{{ $dades_AUTOS->color }}"/>
			</div>
			<div class="form-group">           
				<label for="nombre_places">Nombre de Places</label>
				<input type="number" class="form-control" name="nombre_places" value="{{ $dades_AUTOS->nombre_places }}"/>
			</div>
			<div class="form-group">           
				<label for="nombre_portes">Nombre de Portes</label>
				<input type="number" class="form-control" name="nombre_portes" value="{{ $dades_AUTOS->nombre_portes }}"/>
			</div>
			<div class="form-group">           
				<label for="grandaria_maleter">Grandària del Maleter</label>
				<input type="text" class="form-control" name="grandaria_maleter" value="{{ $dades_AUTOS->grandaria_maleter }}"/>
			</div>
			<div class="form-group">           
				<label for="tipus_combustible">Tipus de Combustible</label>
				<select name="tipus_combustible">
				    <option value="gasolina" {{ $dades_AUTOS->tipus_combustible == "gasolina" ? 'selected' : ''}}>Gasolina</option>
				    <option value="diesel" {{ $dades_AUTOS->tipus_combustible == "diesel" ? 'selected' : ''}}>Diesel</option>
                    <option value="electric" {{ $dades_AUTOS->tipus_combustible == "electric" ? 'selected' : ''}}>Elèctric</option>
				</select> 
			</div>
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('autos') }}">Accés directe a la Llista d'Automòbils</a>
@endsection
