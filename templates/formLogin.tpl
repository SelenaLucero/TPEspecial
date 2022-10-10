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
                        <input name="password" placeholder="password" type="password" id="password" class="form-control">
                    </div>
                    {if $error} 
                        <div class="alert alert-danger mt-3">
                            {$error}
                        </div>
                    {/if}
                    <button  type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>

    </div>
</div>
{* <form method="POST" action="validate">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
   {if $error} 
    <div class="alert alert-danger mt-3">
        {$error}
    </div>
{/if} *}

  
{include 'templates/footer.tpl'}