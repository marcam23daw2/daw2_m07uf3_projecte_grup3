@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou client
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
    <form method="post" action="/clients">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="dni_client">DNI Client</label>
            <input type="text" class="form-control" name="dni_client"/>
        </div>
        <div class="form-group">           
            <label for="nom_cognoms">Nom i Cognoms</label>
            <input type="text" class="form-control" name="nom_cognoms"/>
        </div>
        <div class="form-group">           
            <label for="edat">Edat</label>
            <input type="number" class="form-control" name="edat"/>
        </div>
        <div class="form-group">           
            <label for="telefon">Telèfon</label>
            <input type="tel" class="form-control" name="telefon"/>
        </div>
        <div class="form-group">           
            <label for="adreça">Adreça</label>
            <input type="text" class="form-control" name="adreça"/>
        </div>
        <div class="form-group">           
            <label for="ciutat">Ciutat</label>
            <input type="text" class="form-control" name="ciutat"/>
        </div>
        <div class="form-group">           
            <label for="pais">País</label>
            <input type="text" class="form-control" name="pais"/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email"/>
        </div>
        <div class="form-group">
            <label for="numero_permis_conduccio">Número de permís de conducció</label>
            <input type="text" class="form-control" name="numero_permis_conduccio"/>
        </div>
        <div class="form-group">
            <label for="punts">Punts</label>
            <input type="number" class="form-control" name="punts"/>
        </div>
        <div class="form-group">
            <label for="tipus_targeta">Tipus de targeta</label>
            <select name="tipus_targeta">
			    <option value="visa">Visa</option>
			    <option value="debit">Debit</option>
			</select> 
        </div>
        <div class="form-group">
            <label for="numero_targeta">Número de targeta</label>
            <input type="text" class="form-control" name="numero_targeta"/>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
  </div>
</div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard_clients') }}">Torna al dashboard dels Clients</a>
</div>
@endsection
