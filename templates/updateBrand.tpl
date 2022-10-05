{include 'templates/header.tpl'}


<form action="updateBrand" method="POST" class="my-4">
<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Marca: <input name="Marca"  value= "{$brand->Marca}"type="text" class="form-control"></label>
            <input name="id_Marca" type="hidden" value= "{$brand->id_Marca}"type="text" class="form-control">
        </div>
    </div>
</div>
<button type="submit" class="btn btn-outline-success">Guardar</button>
</form>