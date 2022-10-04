{foreach from= $products item=$product }

      <table class="table">
            <thead>
                  <th> Marca </th>
                  <th>Variedad</th>
                  <th>Precio</th>
                  <tr>
                      <th scope="col">{$product->id_Marca}</th>
                      <th scope="col">{$product->Variedad }</th>
                      <th scope="col">{$product->Precio} </th>
                  </tr>
            </thead>

            <a href="updateProd/{$product->id}" class="btn btn-outline-warning">Editar</a>
            <a href='deleteProduct/{$product->id}' type='button' class='btn btn-outline-danger ml-auto'>Borrar</a>
{/foreach}