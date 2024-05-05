@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou Automovil
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
    <form method="post" action="/autos">
        @csrf
        <div class="form-group">           
            <label for="matricula_auto">Matrícula</label>
            <input type="text" class="form-control" name="matricula_auto"/>
        </div>
        <div class="form-group">           
            <label for="numero_bastidor">Número de Bastidor</label>
            <input type="text" class="form-control" name="numero_bastidor"/>
        </div>
        <div class="form-group">           
            <label for="marca">Marca</label>
            <input type="text" class="form-control" name="marca"/>
        </div>
        <div class="form-group">           
            <label for="model">Model</label>
            <input type="text" class="form-control" name="model"/>
        </div>
        <div class="form-group">           
            <label for="color">Color</label>
            <input type="text" class="form-control" name="color"/>
        </div>
        <div class="form-group">           
            <label for="nombre_places">Nombre de Places</label>
            <input type="number" class="form-control" name="nombre_places"/>
        </div>
        <div class="form-group">           
            <label for="nombre_portes">Nombre de Portes</label>
            <input type="number" class="form-control" name="nombre_portes"/>
        </div>
        <div class="form-group">           
            <label for="grandaria_maleter">Grandària del Maleter</label>
            <input type="text" class="form-control" name="grandaria_maleter"/>
        </div>
        <div class="form-group">           
            <label for="tipus_combustible">Tipus de Combustible</label>
            <select name="tipus_combustible">
			    <option value="gasolina">Gasolina</option>
			    <option value="diesel">Diesel</option>
                <option value="electric">Elèctric</option>
			</select> 
        </div>
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
  </div>
</div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard_autos') }}">Torna al dashboard de Automovils</a>
</div>
@endsection
