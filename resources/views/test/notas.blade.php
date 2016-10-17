@extends('template')

@section('titleh')
  Notas
@endsection

@section('title')
  <h3>Notas</h3>
@endsection

@section('content')
  <ul>
    @foreach($notas as $n)
      <li>{{$n}}</li>
    @endforeach
  </ul>
@endsection
