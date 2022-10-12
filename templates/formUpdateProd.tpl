{include 'templates/header.tpl'}

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-uppercase" class="fw-3-lighter">Edite su producto</h4>
                </div>
                <form action="newUpdateProd/{$product->id}" method="POST" class="p-4" enctype="multipart/form-data">
                    <div class="mb-3">
                    <label> Marcas: </label>
                        <select name="id_Marca"> 
                            {foreach from= $brands item=$brand}
                                <option value="{$brand->id_Marca}">{$brand->Marca}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Variedad: <input name="Variedad" value="{$product->Variedad}" type="text" class="form-control"></label>
                    </div>
                    <div class="mb-3">
                        <label>Descripcion:<input name="Descripcion"  value="{$product->Descripcion}" type="text" class="form-control"></label>
                    </div>
                    <div class="mb-3">
                        <label>Precio <input name="Precio" value="{$product->Precio}" type="text" class="form-control"></label>
                    </div>
                    <div>
                        <label>Img: <input name="images" type="file"  id="images" class="form-control"></label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-outline-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

