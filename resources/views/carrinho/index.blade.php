@extends('layouts.dashboard')

@section('title', 'Carrinho')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
  <h1 class="h2">Meu carrinho</h1>
</div>

@if(count($compras))
<div class="table-responsive">
  <!-- TODO: usuario -->
  <form action="{{ route('compra.store', 1) }}" method="post">
    @csrf
    <table class="table table-striped" id="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Produto</th>
          <th>Quantidade</th>
          <th>Valor total</th>
          <th>Opções</th>
        </tr>
      </thead>
      <tbody>
        @foreach($compras as $compra)
        <tr>
          <td class="align-middle">
            {{ $loop->iteration }}
            <input type="number" name="compra" value="{{ $compra->id }}" hidden>
          </td>
          <td class="align-middle">{{ $compra->produto->produto }}</td>
          <td class="align-middle">{{ $compra->quantidade }}</td>
          <td class="align-middle">R${{ $compra->quantidade * $compra->produto->valor }}</td>
          <td>
            <button type="submit" class="btn btn-success">Comprar</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </form>
</div>
@else
<p class="lead">Nenhum produto adicionado ao carrinho</p>
@endif

@endsection