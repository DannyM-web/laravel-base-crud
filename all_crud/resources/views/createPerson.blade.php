@extends('layouts.main_layout')

@section('content')
  <div class="content">
    <div class="bar">
      <b><a href="{{route('home')}}">Home</a></b>
    </div>

    <div class="creation">
      <form action="{{route('store')}}" method="post">
        @csrf
        @method('POST')
        <label for="first_name">FIRST NAME:</label>
        <input type="text" name="first_name" value=""><br>

        <label for="last_name">LAST NAME:</label>
        <input type="text" name="last_name" value=""><br>

        <label for="address">ADDRESS:</label>
        <input type="text" name="address" value=""><br>

        <label for="code">CODE:</label>
        <input type="text" name="code" value=""><br>

        <label for="state">STATE:</label>
        <input type="text" name="state" value=""><br>

        <label for="phone_number">PHONE NUMBER:</label>
        <input type="text" name="phone_number" value=""><br>

        <label for="role">ROLE:</label>
        <input type="text" name="role" value=""><br>

        <input type="submit" name="submit" value="CREATE">
      </form>
    </div>
  </div>
@endsection
