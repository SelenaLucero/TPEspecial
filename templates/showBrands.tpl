{include 'templates/header.tpl'}

<h1>Marcas de vinos</h1>

<section>
  {foreach from= $brands item=$brand}
    <div class="list-group">
      <ul class="list-group list-group-flush">
        <li><a href="filterBrand/{$brand->id_Marca}" class="list-group-item list-group-item-action">{$brand->Marca}</a>
        </li>
      </ul>
    </div>
  {/foreach}
</section>