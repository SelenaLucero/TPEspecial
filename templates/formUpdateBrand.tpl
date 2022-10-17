{include 'templates/header.tpl'}


<form action="newUpdateBrand/{$brand->id_Marca}" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <div class="mb-3">

                    <label>Marca: <input name="Marca" value="{$brand->Marca}" type="text" class="form-control"></label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-success">Guardar</button>
</form>