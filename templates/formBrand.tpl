{include 'templates/header.tpl'}

<h4  class="text-uppercase" class="fw-3-lighter" >Ingrese su nueva marca</h4>

<form action="insertBrand" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                   <label>Marca:<input name="Marca" type="text" class="form-control"></label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-outline-success">Guardar</button>
</form>

{include 'templates/showTableBrand.tpl'}