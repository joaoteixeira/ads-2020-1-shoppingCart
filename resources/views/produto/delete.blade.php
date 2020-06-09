@extends('layouts.dashboard')

@section('title', 'Produtos')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  <h1 class="h2">Excluir produto</h1>
</div>
<p class="lead">Excluir produto {{ $produto->produto }}?</p>

<form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
  @csrf
  @method('DELETE')

  <div class="row">
    <div class="col-md-6">
      <a class="btn btn-primary btn-block" type="button" href="{{ route('produtos.index') }}">Cancelar</a>
    </div>
    <div class="col-md-6 ">
      <button class="btn btn-danger btn-block" type="submit">Excluir</button>
    </div>
  </div>
</form>
@endsection