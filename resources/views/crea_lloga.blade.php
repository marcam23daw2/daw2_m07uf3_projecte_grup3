@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou Lloga
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
    <form method="post" action="/lloga">
        @csrf
        <div class="form-group">           
            <label for="dni_client">DNI del Client</label>
            <input type="text" class="form-control" name="dni_client"/>
        </div>
        <div class="form-group">           
            <label for="matricula_auto">Matrícula del Automovil</label>
            <input type="text" class="form-control" name="matricula_auto"/>
        </div>
        <div class="form-group">           
            <label for="data_prestec">Data del Prestec</label>
            <input type="date" class="form-control" name="data_prestec"/>
        </div>
        <div class="form-group">           
            <label for="data_devolucio">Data de Devolució</label>
            <input type="date" class="form-control" name="data_devolucio"/>
        </div>
        <div class="form-group">           
            <label for="lloc_devolucio">Lloc de Devolució</label>
            <input type="text" class="form-control" name="lloc_devolucio"/>
        </div>
        <div class="form-group">           
            <label for="preu_dia">Preu per Dia</label>
            <input type="number" class="form-control" name="preu_dia"/>
        </div>
        <div class="form-group">           
            <label for="prestec_retorn_diposit_ple">Préstec amb retorn de dipòsit ple</label>
            <select name="prestec_retorn_diposit_ple">
			    <option value="1">Sí</option>
			    <option value="0">No</option>
			</select> 
        </div>
        <div class="form-group">           
            <label for="tipus_asseguranca">Tipus d'assegurança</label>
            <select name="tipus_asseguranca">
			    <option value="Franquícia fins a 1000 Euros">Franquícia fins a 1000 Euros</option>
			    <option value="Franquíca fins 500 Euros">Franquíca fins 500 Euros</option>
                <option value="Sense franquícia">Sense franquícia</option>
			</select> 
        </div>
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
  </div>
</div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard_lloga') }}">Torna al dashboard de Lloga</a>
</div>
@endsection
