{include 'templates/header.tpl'}

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-uppercase" class="fw-3-lighter">Iniciar sesion</h4>
                </div>
                <form action="validate" method="POST" class="p-4" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input name="email" placeholder="email" type="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input name="password" placeholder="password" type="password" id="password"
                            class="form-control">
                    </div>
                    {if $error}
                        <div class="alert alert-danger mt-3">
                            {$error}
                        </div>
                    {/if}
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>

    </div>
</div>



{include 'templates/footer.tpl'}