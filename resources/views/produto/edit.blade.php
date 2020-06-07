@extends('layouts.dashboard')

@section('title', 'Produtos')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  <h1 class="h2">Editar Produto</h1>
</div>

<form action="{{ route('produtos.update', $produto->id) }}" method="post" class="needs-validation">
  @csrf
  @method('PUT')

  <div class="media">
    <img src="{{ $produto->imagem }}" class="align-self-start mr-3" alt="{{ $produto->descricao }}" width="200">
    <div class="media-body">
      <div class="mb-3">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="" value="{{ $produto->descricao }}" required>
      </div>

      <div class="mb-3">
        <label for="imagem">Imagem</label>
        <input type="url" class="form-control" id="imagem" name="imagem" placeholder="https://shopping-cart-ifro.herokuapp.com/produtos/11/violao.png" value="{{ $produto->imagem }}">
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="valor">Valor</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">R$</span>
            </div>
            <input type="number" step="any" class="form-control" id="valor" name="valor" placeholder="100.00" value="{{ $produto->valor }}" required>
          </div>
        </div>

        <div class="col-md-6 mb-3">
          <label for="estoque">Estoque</label>
          <input type="number" class="form-control" id="estoque" name="estoque" value="{{ $produto->estoque }}">
        </div>
      </div>
    </div>
  </div>

  <hr class="mb-4">

  <div class="row">
    <div class="col-md-6">
      <a class="btn btn-danger btn-block" href="{{ route('produtos.index') }}">Cancelar</a>
    </div>
    <div class="col-md-6 ">
      <button class="btn btn-primary btn-block" type="submit">Salvar</button>
    </div>
  </div>
</form>
@endsection