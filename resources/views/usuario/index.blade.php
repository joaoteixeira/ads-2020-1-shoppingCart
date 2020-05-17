@extends('layouts.dashboard')

@section('title', 'Usuários')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
  <h1 class="h2">Listagem de Usuários</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Share</button> -->
      <a type="button" class="btn btn-sm btn-outline-secondary" href="{{ route('usuarios.create') }}">Novo usuário</a>
    </div>
  </div>
</div>


@if(session('status'))
<div class="alert alert-secondary" role="alert">
  {{ session('status') }}
</div>
@endif

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Opções</th>
      </tr>
    </thead>
    <tbody>
      @foreach($usuarios as $usuario)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $usuario->nome }}</td>
        <td>{{ $usuario->email }}</td>
        <td>{{ $usuario->telefone }}</td>
        <td>
          <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
          <a href="{{ route('usuarios.delete', $usuario->id) }}">Excluir</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection