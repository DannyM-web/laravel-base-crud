@extends('layouts.main_layout')

@section('content')
  <div class="content">
    <div class="bar">
      <b><a href="{{route('home')}}">Home</a></b>
    </div>

    <div class="list">

      <h2>Stai vedendo i dettagli di {{$omino['first_name']}} {{$omino['last_name']}}</h2>

      <ul>
        <li>FIRST NAME: {{$omino['first_name']}}</li>
        <li>LAST NAME: {{$omino['last_name']}}</li>
        <li>ADDRESS: {{$omino['address']}}</li>
        <li>CODE: {{$omino['code']}}</li>
        <li>STATE: {{$omino['state']}}</li>
        <li>PHONE NUMBER: {{$omino['phone_number']}}</li>
        <li>ROLE: {{$omino['role']}}</li>
      </ul>
      <div class="buttons">
        <a href="{{route('edit', $omino['id'])}}">Edit</a>
        <a href="{{route('delete', $omino['id'])}}">Delete</a>
      </div>
    </div>
  </div>
@endsection
