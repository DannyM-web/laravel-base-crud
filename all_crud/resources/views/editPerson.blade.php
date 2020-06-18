@extends('layouts.main_layout')

@section('content')
  <div class="content">
    <div class="bar">
      <b><a href="{{route('home')}}">Home</a></b>
    </div>

    <div class="creation">
      <h2>Stai modificando i dettagli di {{$omino['first_name']}} {{$omino['last_name']}} </h2>
      <form action="{{route('update', $omino['id'])}}" method="post">
        @csrf
        @method('POST')
        <label for="first_name">FIRST NAME:</label>
        <input type="text" name="first_name" value="{{$omino['first_name']}}"><br>

        <label for="last_name">LAST NAME:</label>
        <input type="text" name="last_name" value="{{$omino['last_name']}}"><br>

        <label for="address">ADDRESS:</label>
        <input type="text" name="address" value="{{$omino['address']}}"><br>

        <label for="code">CODE:</label>
        <input type="text" name="code" value="{{$omino['code']}}"><br>

        <label for="state">STATE:</label>
        <input type="text" name="state" value="{{$omino['state']}}"><br>

        <label for="phone_number">PHONE NUMBER:</label>
        <input type="text" name="phone_number" value="{{$omino['phone_number']}}"><br>

        <label for="role">ROLE:</label>
        <input type="text" name="role" value="{{$omino['role']}}"><br>

        <input type="submit" name="submit" value="EDIT">
      </form>
    </div>
  </div>
@endsection
