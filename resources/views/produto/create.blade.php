@extends('layouts.dashboard')

@section('title', 'Produtos')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  <h1 class="h2">Cadastrar produto</h1>
</div>

<form action="{{ route('produtos.store') }}" method="post" class="needs-validation">
  @csrf
  <div class="mb-3">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Violão usado" required>
  </div>

  <div class="mb-3">
    <label for="imagem">Imagem <span class="text-muted">(Opcional)</span></label>
    <input type="url" class="form-control" id="imagem" name="imagem" placeholder="https://shopping-cart-ifro.herokuapp.com/produtos/11/violao.png">
  </div>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="valor">Valor</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">R$</span>
        </div>
        <input type="number" step="any" class="form-control" id="valor" name="valor" placeholder="100.00" required>
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="estoque">Estoque <span class="text-muted">(Opcional)</span></label>
      <input type="number" class="form-control" id="estoque" name="estoque" placeholder="1">
    </div>
  </div>

  <hr class="mb-4">
  <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
</form>
@endsection