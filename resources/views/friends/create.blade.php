@extends('layout')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form class="" action="{{ route('friends.store')}}" method="post">
     {{ csrf_field() }}
    Name <input type="text" name="name"><br>
    Birthday <input type="text" name="birthday"><br>
    Phone <input type="text" name="phone"><br>
    Photo <input type="text" name="photo"><br>
    <input type="submit" value="Submit">
  </form>
@endsection
