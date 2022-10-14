{include 'templates/header.tpl'}
{* TODO LOS PRODUCTOS Y DETALLES DE ESTOS *}
{* esto va abajo de el primer div *}
{* <img src="'. $producto->img .'" class="card-img-top" alt="..."> *}

<h1>Nuestros productos</h1> 
<section class="card">
    {foreach from= $products item=$product} 
      <div class="card">
          <div class="card-body">
         
          <h5 class="card-title">Marca: {$product->Marca}</h5>
          <div>
          {$product->images}
          </div>
          <p class="card-text">Variedad: {$product->Variedad}</p>
          <p class="card-text">Precio: {$product->Precio}</p>
          <a href="detail/{$product->id}" class="btn btn-outline-secondary">Detalle</a>
          </div>
        </div>
    
    {/foreach} 
</section>
  
{include 'templates/footer.tpl'}
