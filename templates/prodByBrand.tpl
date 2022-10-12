{include 'templates/header.tpl'}

<section class="card">
{foreach from= $products item=$product} 
  <div class="card">
      <div class="card-body">
     
      <h5 class="card-title">Marca: {$product->Marca}</h5>
      <p class="card-text">Variedad: {$product->Variedad}</p>
      <p class="card-text">Precio: {$product->Precio}</p>
      <a href="detail/{$product->id}" class="btn btn-outline-secondary">Detalle</a>
      </div>
    </div>

{/foreach} 
</section>