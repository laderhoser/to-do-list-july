@extends('layout')

@section('title')
About {{$name}}
@endsection


@section('content')
 <div class="content">
  {{$name}} is {{$age}}
  </div>
@endsection