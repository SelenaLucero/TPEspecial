{include 'templates/header.tpl'}


<div class="container mt-4">
    <div class="row justify-content-center">

        <form action="insertBrand" method="POST" class="p-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-uppercase" class="fw-3-lighter">Ingrese su nueva marca</h4>
                    </div>
                        <div class="d-grid">
                            <label >Marca: <input name="Marca" type="text" class="form-control"></label>
                            <button type="submit" class="btn btn-outline-success">Guardar</button>
                        </div>
                    
                </div>
            </div>
    </div>
</div>
 

</form>

{include 'templates/showTableBrand.tpl'}
  