<div class="">

    <h2 class="text-center p-3 mt-5 mb-5"> <i class="bi bi-shop"></i> Cadastrar Produto</h2>
    <div class=" d-flex justify-content-center">
        <div style="width: 60rem; height: 30rem;">
            <div class=" border p-5 rounded-7 card-body shadow">

                <form class="mx-4 mt-5 "  wire:submit.prevent="store">

                    <div>
                        <div class="d-flex align-items-center ">
                        <div class="mb-3 col-3 ">
                            <label for="nome" class="form-label ">Nome</label>
                            <input type="text" wire:model="nome" placeholder="nome do produto" class="form-control"
                                id="nome" aria-describedby="nome">
                        </div>

                        <div class="mb-3 col-3">
                            <label for="marca" class="form-label">Marca</label>
                            <input type="text" wire:model="marca" placeholder="marca" class="form-control"
                                id="marca" aria-describedby="marca">
                        </div>
                          <div class="mb-3 col-3">
                            <label for="quantidade" class="form-label">Quantidade</label>
                            <input type="text" wire:model="quantidade" placeholder="1, 2, 3" class="form-control"
                                id="quantidade" aria-describedby="quantidade">
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="mb-3 ">
                            <label for="categoria" class="form-label">Categoria</label>
                            <input type="text" wire:model="categoria" placeholder="ex: alimento.."
                                class="form-control" id="categoria" aria-describedby="categoria">
                        </div>
                        <div class="mb-3 ">
                            <label for="preco_custo" class="form-label">Preço de Custo</label>
                            <input type="text" wire:model="preco_custo" placeholder="R$" class="form-control"
                                id="preco_custo" aria-describedby="preco_custo">
                        
                        </div>
                        <div class="mb-3 ">
                            <label for="preco_venda" class="form-label">Preço de Venda</label>
                            <input type="text" placeholder="R$..." wire:model="preco_venda" class="form-control"
                                id="preco_venda">
                        </div>
                    </div>
                     <div class="mb-3 ">
                            <label for="estoque_minimo" class="form-label">Estoque Mínimo</label>
                            <input type="text" placeholder="Qtd minima no estoque" wire:model="estoque_minimo" class="form-control"
                                id="estoque_minimo">
                        </div>
                        <div class="mb-3 ">
                            <label for="descricao" class="form-label">Descrição</label>
                            <input type="text" placeholder="Produto de ....." wire:model="descricao"
                                class="form-control" id="descricao">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit"  class="btn-outline theme-accent">Salvar Produto</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
