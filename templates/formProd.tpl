{include 'templates/header.tpl'}


<form action="insertProduct" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <input name="id" type="hidden"  value="id" class="form-control"></label>
                <label>Marca:<input name="id_Marca" value="id_Marca" type="number" class="form-control"></label>
                <label>Variedad: <input name="Variedad" value="Variedad" type="text" class="form-control"></label>
                <label>Descripcion: <input name="Descripcion"  value="Descripcion" type="text" class="form-control"></label>
                <label>Precio: <input name="Precio" value="Precio"type="text" class="form-control"></label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-outline-success">Guardar</button>
    
</form>


{include 'templates/showTableProd.tpl'}