{include 'templates/header.tpl'}


<form action="updateBrand" method="POST" class="my-4">
<div class="row">
    <div class="col-9">
        <div class="form-group">
        {foreach from= $brands item=$brand} 
            <option value="{$brand->id_Marca}">{$brand->Marca}</option>
        {/foreach}
            <label>Marca: <input name="Marca" value= "Marca" type="text" class="form-control"></label>
            <input name="id_Marca" type="hidden" value= "id_Marca"type="text" class="form-control">
        </div>
    </div>
</div>
<button type="submit" class="btn btn-outline-success">Guardar</button>
</form>