@extends("layout")

@section('content')
  <div class="container">
    <ul>
      <li>Nome: {{$cane['nome']}}</li>
      <li>Razza: {{$cane['tipo']}}</li>
      <li>Peso: {{$cane['peso_kg']}}Kg</li>
      <li>Altezza: {{$cane['altezza_cm']}}cm</li>

    </ul>
  </div>

@endsection
