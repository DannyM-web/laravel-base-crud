@extends('layouts.main_layout')

@section('content')
<div class="content">
  <div class="bar">
    <b><a href="{{route('home')}}">Home</a></b>
    <b> <a href="{{route('create')}}">Add new person</a> </b>
  </div>
  <div class="list">
    <div class="title">

      <h2>Ospiti</h2>
      @if (session('success'))
        <h2>{{session('success')}}</h2>
      @endif
    </div>
    <div class="test">
      <ul>
        @foreach ($omini as $omino)
          <li>
            <a href="{{route('show', $omino['id'])}}">{{$omino['first_name']}} {{$omino['last_name']}}</a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

@endsection
