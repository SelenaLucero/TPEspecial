{include 'templates/header.tpl'}

<form method="POST" action="validate">
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
{/if}

  <button type="submit" class="btn btn-primary">Entrar</button>
</form>

{include 'templates/footer.tpl'}