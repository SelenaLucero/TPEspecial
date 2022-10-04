{include 'templates/header.tpl'}

<h1>Marcas de vinos</h1>
{* como hago para que el links de marcas que tengo me lleve a prodByBrand donde 
tendria todos mis productos de esa marca *}
<section class="card">
{foreach from= $brands item=$brand} 
  <div class="card">
      <div class="card-body">
        <ul>
          <li class="card-title"><a href="brand/{$brand->Marca}">{$brand->Marca}</a></li>
        </ul>
    </div>
  </div>
{/foreach} 
</section>

