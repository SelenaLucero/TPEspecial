{include 'templates/header.tpl'}

<h4  class="text-uppercase" class="fw-3-lighter" >Ingrese su nueva marca</h4>

<form action="insertBrand" method="POST" class="p-4">
    <div class="cow">
        <div class="col-9">
            <div class="mb-3">
                <label>Marca: <input name="Marca" type="text" class="form-control"></label>
                <button type="submit" class="btn btn-outline-success">Guardar</button>
        </div>
        </div>
    </div>
    
        
</form>

{include 'templates/showTableBrand.tpl'}