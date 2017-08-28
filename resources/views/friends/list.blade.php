@extends('layout')
@section('content')
<h1>FRIENDS LIST</h1>
@foreach ($friends  as $friend)
<div class="block">
  <div class="name">

    {{ $friend->name }}

  </div>
  <div class="time">
    {{ $friend->birthday }}
  </div>
  <div class="text">
      {{ $friend->phone}}
  </div>
  <a href="{{ route('friend.show', $friend->id) }}" class="btn btn-primary">More</a>
</div>
@endforeach

@endsection
