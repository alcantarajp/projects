@extends('template')

@section('content')
  <table  border=1>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach($clientes as $cliente)
        <tr>
          <td>{{$cliente['id']}}</td>
          <td>{{$cliente['nome']}}</td>
          <td>{{$cliente->telefone}}</td>
          <td>{{$cliente->email}}</td>
        </tr>
        @endforeach
      </tbody>
  </table>
@endsection
