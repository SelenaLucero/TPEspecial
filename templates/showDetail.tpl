{include 'templates/header.tpl'}


<div class="card">
    {* aca va la imagen 
    <img src="img/DadaChocolate.jpg" class="card-img-top" alt="...">
    *}
    {* como hago para que me solo de la marca y no el id *}
    
      <p class="card-text">Marca: {$product->Marca}</p>
      <p class="card-text">Variedad: {$product->Variedad}</p>
      <p class="card-text">Precio: {$product->Precio}</p>
      <p class="card-text">Descripcion: {$product->Descripcion}</p>

  </div>

  {include 'templates/footer.tpl'}