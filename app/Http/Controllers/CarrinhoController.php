<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(int $usuario)
  {
    // $compras = fn ($compra) => $compra
    //   ->where('usuario_id', $usuario)
    //   ->where('finalizado', false);

    // $produtos = Produto::whereHas('compras', $compras)->get();

    $compras = Compra::where('usuario_id', $usuario)
      ->where('finalizado', false)
      ->with('produto')
      ->get();

    return view(
      'carrinho.index',
      array('compras' => $compras),
    );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
  }

  /**
   * Show the form for delete the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function delete($id)
  {
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
  }
}
