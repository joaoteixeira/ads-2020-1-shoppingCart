@extends('layouts.dashboard')

@section('title', $produto->produto)
@section('icon', $produto->imagem)
@section('description', $produto->descricao)
@section('image', $produto->imagem)

@section('content')
<div class="container">

  <div class="row">

    <div class="col-lg-3">
      <h1 class="my-4">Shop Name</h1>
      <div class="list-group">
        <a href="#" class="list-group-item active">Category 1</a>
        <a href="#" class="list-group-item">Category 2</a>
        <a href="#" class="list-group-item">Category 3</a>
      </div>
    </div>

    <div class="col-lg-9">

      <div class="card mt-4">
        <img class="card-img-top img-fluid" src="{{ $produto->imagem }}" alt="{{ $produto->produto }}" style="max-height: 500px; object-fit: cover;">
        <div class="card-body">
          <h3 class="card-title">{{ $produto->produto }}</h3>
          <h4>R${{ $produto->valor }}</h4>
          <p class="card-text">{{ $produto->descricao }}</p>
          <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span> 4.0 stars
        </div>
      </div>

      <div class="card card-outline-secondary my-4">
        <div class="card-header">
          Product Reviews
        </div>
        <div class="card-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
          <small class="text-muted">Posted by Anonymous on 3/1/17</small>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
          <small class="text-muted">Posted by Anonymous on 3/1/17</small>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
          <small class="text-muted">Posted by Anonymous on 3/1/17</small>
          <hr>
          <a href="#" class="btn btn-success">Leave a Review</a>
        </div>
      </div>

    </div>

  </div>

</div>
@endsection