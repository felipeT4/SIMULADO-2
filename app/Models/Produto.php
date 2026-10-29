<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 
        'descricao', 
        'marca', 
        'categoria', 
        'preco_custo', 
        'preco_venda', 
        'quantidade', 
        'estoque_minimo'
    ];
     public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function movimentacoes(): HasMany
    {
        return $this->hasMany(movimentacao::class);
    }
}
