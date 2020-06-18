@extends('layouts.main_layout')

@section('content')
<div class="content">
  <div class="bar">
    <b><a href="{{route('home')}}">Home</a></b>
    <b> <a href="{{route('create')}}">Add new person</a> </b>
  </div>

  <div class="list">
    <h2>Persone</h2>
    <ul>
      @foreach ($omini as $omino)
        <li>
          <a href="{{route('show', $omino['id'])}}">{{$omino['first_name']}} {{$omino['last_name']}}</a>
        </li>
      @endforeach
    </ul>
  </div>
</div>

@endsection




{{-- -
   id
- first name
- last name
- address
- code
- state
- phone number
- role --}}
