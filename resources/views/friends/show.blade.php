@extends('layout')
@section('content')
<h1>{{$friend->name}}</h1>

<p>{{$friend->birthday}}</p>

<p> {{$friend->phone}}</p>

<a href="{{route('friend.edit',$friend->id)}}" class="btn btn-primary"> Edit </a>

@endsection
