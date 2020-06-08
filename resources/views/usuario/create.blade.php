@extends('layouts.dashboard')

@section('title', 'Usuários')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  <h1 class="h2">Cadastrar usuário</h1>
</div>

<form action="{{ route('usuarios.store') }}" method="post" class="needs-validation">
  @csrf
  <div class="mb-3">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" required>
    <div class="invalid-feedback">O nome é requerido.</div>
  </div>

  <div class="mb-3">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="voce@email.com" required>
    <div class="invalid-feedback">Um email válido é requerido.</div>
  </div>

  <div class="mb-3">
    <label for="telefone">Telefone</label>
    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(99) 99999-9999" required>
    <div class="invalid-feedback">Um telefone válido é requerido.</div>
  </div>

  <hr class="mb-4">
  <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
</form>
@endsection