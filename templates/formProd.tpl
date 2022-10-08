{include 'templates/header.tpl'}
<h4  class="text-uppercase" class="fw-3-lighter" >Ingrese su nuevo producto</h4>

<form action="insertProduct" method="POST" class="my-4" enctype="multipart/form-data">
    <div class="row">
        <div class="col-9">
             <div class="form-group">
             
             <select name="id_Marca">
            {foreach from= $brands item=$brand} 
                <option value="{$brand->id_Marca}">{$brand->Marca}</option>
            {/foreach}
            
             </select>
                <label>Variedad <input name="Variedad" type="text" class="form-control"></label>
                <label>Descripcion<input name="Descripcion" type="text" class="form-control"></label>
                <label>Precio <input name="Precio" type="text" class="form-control"></label>
                <label>Img <input name="images" type="file"  id="images" class="form-control"></label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-outline-success">Guardar</button>
    
</form>


 {include 'templates/showTableProd.tpl'}