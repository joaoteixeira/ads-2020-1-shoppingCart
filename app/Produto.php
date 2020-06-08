<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'produtos';
    protected $fillable = ['descricao', 'valor', 'imagem', 'estoque'];

    public function setEstoqueAttribute($value)
    {
        $this->attributes['estoque'] = $value ?: 1;
    }

    public function setImagemAttribute($value)
    {
        $this->attributes['imagem'] = $value ?: '/images/404.jpg';
    }
}
