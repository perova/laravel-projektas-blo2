@extends('layout')
@section('content')

  <h1>Single Testimonial</h1>
    <div>
      {{ $test->id }}
    </div>
    <div>
      {{ $test->name }}
    </div>
    <div>
      {{ $test->time }}
    </div>
    <div>
      {{ $test->content }}
    </div>
@endsection
