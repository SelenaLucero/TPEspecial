
{foreach from= $products item=$product }
      <table class="table">
            <thead>
                  <th>Marca</th>
                  <th>Variedad</th>
                  <th> Descripcion</th>
                  <th>Precio</th>
                  <tr>
                      <td scope="cow">{$product->Marca}</td>
                      <td scope="cow">{$product->Variedad}</td>
                      <td scope="row">{$product->Descripcion}</td>
                      <td scope="row">{$product->Precio} </td>
                  </tr>
                
            </thead>
      </table>
      <div>
            <a href="updateProd/{$product->id}" class="btn btn-outline-warning">Editar</a>
            <a href="deleteProduct/{$product->id}" type='button' class='btn btn-outline-danger ml-auto'>Borrar</a>
      </div>
      
      
{/foreach}