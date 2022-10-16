
{foreach from= $brands item=$brand }
      
    <table class="table">
          <thead>
            <th>Marca</th>
          <tr>
            <td scope="cow">{$brand->Marca}</td>
            <a href="updateBrand/{$brand->id_Marca}" class="btn btn-outline-warning">Editar</a>
            <a href='deleteBrand/{$brand->id_Marca}' class='btn btn-outline-danger '>Borrar</a>
            </tr>
    </thead> 
    
    
{/foreach}