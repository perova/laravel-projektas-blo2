@extends('layout')
@section('content')
    <h1>{{ $title }}</h1>
    @foreach ($test  as $testi)
    <div class="block">
      <div class="name">
        @if ($testi->name == 'James')
          <strong>LABAS</strong>
        @endif
        {{ $testi->name }}

      </div>
      <div class="time">
        {{ $testi->time }}
      </div>
      <div class="text">
          {{ $testi->content}}
      </div>
    </div>
    @endforeach
    <h2>Write Comment</h2>

    <input type="text" name="" value="" placeholder="Name">
    <input type="text" name="" value="" placeholder="Surname"><br>
    <textarea name="name" rows="8" cols="80" placeholder="Your Message"></textarea>
    <input type="submit" name="" value="Submit">

  @endsection
