{include 'templates/header.tpl'}

{* ACA MUESTRO MIS MARCAS PERO MI FILTRO ESTA EN SHOWPRODUCT QUE CONTIENE MI PRODBYBRAN
MI PRODUCTO SEGUN EL SELECT , ESTE ES AUXILIAR*}

<section class="card">
{foreach from= $brands item=$brand} 
  <div class="card">
      <div class="card-body">
        <ul>
          <li class="card-title">{$brand->Marca}</li>
        </ul>
    </div>
  </div>
{/foreach} 
</section>

