{include 'templates/header.tpl'}

<h1>Marcas de vinos</h1>
{* como hago para que el links de marcas que tengo me lleve a prodByBrand donde 
tendria todos mis productos de esa marca *}
<section>
{foreach from= $brands item=$brand} 
  <div class="list-group">
      <ul class="list-group list-group-flush">
          <li><a href="filterBrand/{$brand->id_Marca}" class="list-group-item list-group-item-action">{$brand->Marca}</a></li>
        </ul>
      </div>
{/foreach} 
</section> 

