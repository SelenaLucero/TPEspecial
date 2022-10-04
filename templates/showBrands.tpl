{include 'templates/header.tpl'}

<h1>Marcas de vinos</h1>

<section class="card">
{foreach from= $brands item=$brand} 
  <div class="card">
      <div class="card-body">
        <ul>
          <li class="card-title"><a href="{$brand->Marca}">{$brand->Marca}</a></li>
        </ul>
    </div>
  </div>
{/foreach} 
</section>

