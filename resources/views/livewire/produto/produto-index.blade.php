<div>

    <nav class="navbar bg-1 fg-2 ">
  <div class="container-fluid">
    <h2 class="navbar-brand bi bi-shop "> PetShop SENAI</h2>
    <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" aria-hidden="true"></span>
    </button>
    <dialog class="drawer drawer-end" tabindex="-1" id="navbarTogglerDemo02" aria-labelledby="navbarTogglerDemo02Label">
      <div class="drawer-header">
        <h5 class="drawer-title" id="navbarTogglerDemo02Label">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
      </div>
      <div class="drawer-body">
      </div>
    </dialog>
  </div>
</nav>


    <div class="card-body">
           <div class="d-flex align-items-center p-5 mx-auto">
        <h2 class="text-center me-5">Produtos cadastrados</h2> <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar produto" aria-label="Search"/>
          <button class="btn-outline theme-success" type="submit">Buscar</button>
        </form>
           </div>

           <div class="card mx-auto shadow mt-5 p-5"style="width: 60rem; height: 30rem;">
            <table class="table table-striped ">
                <thead>
                    <tr class="">
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Quantidade</td>
                        <td>Marca</td>
                        <td>Preço de Venda</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($produtos as $p)
                    <tr> 
                        <td> {{$p->id}} </td>
                        <td> {{$p->nome}} </td>
                        <td> {{$p->quantidade}} </td>
                        <td> {{$p->marca}} </td>
                        <td> {{$p->preco_venda}} 
                            <button wire:click='delete'  class="btn-outline theme-warning ms-5">Editar</button>
                            <button wire:click='delete'  class="btn-outline theme-danger">Excluir</button> 
                        </td>  
                    </tr>
                    @endforeach
                </tbody>
            </table>
           </div>

    </div>





</div>
