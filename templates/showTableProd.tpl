
{foreach from= $products item=$product }
      <table class="table">
            <thead>
                 
                  <th>Variedad</th>
                  <th> Descripcion </th>
                  <th>Precio</th>
                  <tr>
                      <th scope="cow">{$product->Variedad}</th>
                      <th scope="row">{$product->Descripcion}</th>
                      <th scope="row">{$product->Precio} </th>
                  </tr>
                
            </thead>
      </table>
      <div>
            <a href="updateProd/{$product->id}" class="btn btn-outline-warning">Editar</a>
            <a href="deleteProduct/{$product->id}" type='button' class='btn btn-outline-danger ml-auto'>Borrar</a>
      </div>
      
      
{/foreach}