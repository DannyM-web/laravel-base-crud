@extends("layout")

@section('content')
  <div class="container">
    <h2>Cani:</h2>
    <ul>
      @foreach ($cani as $cane)
        <li>
          <a href="{{route('singledog', $cane['id'])}}">Nome: {{$cane['nome']}} </a>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
