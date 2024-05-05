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
    <form method="post" action="{{ route('lloga.update', [$dades_LLOGA->dni_client, $dades_LLOGA->matricula_auto]) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">           
            <label for="dni_client">DNI del Client</label>
            <input type="text" class="form-control" name="dni_client" value="{{ $dades_LLOGA->dni_client }}" readonly />
        </div>
        <div class="form-group">           
            <label for="matricula_auto">Matrícula del Automovil</label>
            <input type="text" class="form-control" name="matricula_auto" value="{{ $dades_LLOGA->matricula_auto }}" readonly />
        </div>
        <div class="form-group">           
            <label for="data_prestec">Data del Prestec</label>
            <input type="date" class="form-control" name="data_prestec" value="{{ $dades_LLOGA->data_prestec }}"/>
        </div>
        <div class="form-group">           
            <label for="data_devolucio">Data de Devolució</label>
            <input type="date" class="form-control" name="data_devolucio" value="{{ $dades_LLOGA->data_devolucio }}"/>
        </div>
        <div class="form-group">           
            <label for="lloc_devolucio">Lloc de Devolució</label>
            <input type="text" class="form-control" name="lloc_devolucio" value="{{ $dades_LLOGA->lloc_devolucio }}"/>
        </div>
        <div class="form-group">           
            <label for="preu_dia">Preu per Dia</label>
            <input type="number" class="form-control" name="preu_dia" value="{{ $dades_LLOGA->preu_dia }}"/>
        </div>
        <div class="form-group">           
            <label for="prestec_retorn_diposit_ple">Préstec amb retorn de dipòsit ple</label>
            <select name="prestec_retorn_diposit_ple">
			    <option value="1" {{ $dades_LLOGA->prestec_retorn_diposit_ple == "1" ? 'selected' : ''}}>Sí</option>
			    <option value="0" {{ $dades_LLOGA->prestec_retorn_diposit_ple == "0" ? 'selected' : ''}}>No</option>
			</select> 
        </div>
        <div class="form-group">           
            <label for="tipus_asseguranca">Tipus d'assegurança</label>
            <select name="tipus_asseguranca">
			    <option value="Franquícia fins a 1000 Euros" {{ $dades_LLOGA->tipus_asseguranca == "Franquícia fins a 1000 Euros" ? 'selected' : ''}}>Franquícia fins a 1000 Euros</option>
			    <option value="Franquíca fins 500 Euros" {{ $dades_LLOGA->tipus_asseguranca == "Franquíca fins 500 Euros" ? 'selected' : ''}}>Franquíca fins 500 Euros</option>
                <option value="Sense franquícia" {{ $dades_LLOGA->tipus_asseguranca == "Sense franquícia" ? 'selected' : ''}}>Sense franquícia</option>
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
