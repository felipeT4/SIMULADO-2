<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use GuzzleHttp\Promise\Create;
use Livewire\Component;

class ProdutoCreate extends Component
{

        public $nome; 
        public $descricao; 
        public $marca; 
        public $categoria; 
        public $preco_custo; 
        public $preco_venda; 
        public $quantidade;
        public $estoque_minimo;

        public function store(){

           $produto = Produto::create([

            'nome' => $this -> nome,
            'descricao' => $this -> descricao,
            'marca' => $this -> marca,
            'categoria' => $this -> categoria,
            'preco_custo' => $this -> preco_custo,
            'preco_venda' => $this -> preco_venda,
            'quantidade' => $this -> quantidade,
            'estoque_minimo' => $this -> estoque_minimo
            
            ]);

              session()->flash(
            'success',
            'Produto cadastrado com sucesso!'
        );
        return redirect()->route('produtos');
        }
      

    public function render()
    { 
        return view('livewire.produto.produto-create');
    }
}
