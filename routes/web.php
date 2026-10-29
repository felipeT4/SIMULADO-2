<?php

use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/produto/create', ProdutoCreate::class) -> name('produto.create');
Route::get('/produtos', ProdutoIndex::class) -> name('produtos');
