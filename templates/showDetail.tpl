{include 'templates/header.tpl'}


<div class="card">

  <p class="card-text">Marca: {$product->Marca}</p>
  <p class="card-text">Variedad: {$product->Variedad}</p>
  <p class="card-text">Precio: {$product->Precio}</p>
  <p class="card-text">Descripcion: {$product->Descripcion}</p>

</div>

{include 'templates/footer.tpl'}