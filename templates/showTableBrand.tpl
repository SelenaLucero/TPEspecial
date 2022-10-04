
{foreach from= $brands item=$brand }
      
    <table class="table">
          <thead>
            <th>Marca</th>
          <tr>
            <th scope="col">{$brand->Marca }</th>
          </tr>
    </thead> 
    <a href="updateBrand/{$brand->id_Marca}" class="btn btn-outline-warning">Editar</a>
    <a href='deleteBrand/{$brand->id_Marca}' type='button' class='btn btn-outline-danger ml-auto'>Borrar</a>
{/foreach}