@extends('template')

@section('content')
  <h1>Blog</h1>

  @foreach($posts as $post)
    <h2> {{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <h3>Comentários</h3>
    @foreach($post->coments as $coment)
      <b>Nome: </b>{{$coment->name}}<br>
      <b>Comentário:</b>{{$coment->coment}}<br>
    @endforeach
  @endforeach

@endsection
