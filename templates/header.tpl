<!DOCTYPE html>
<html lang="en">

<head>
  <base href={BASE_URL}>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
  <title>Vinoteca</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg" style="background-color:transparent;">
    <div class="container-fluid">
      <a class="navbar-brand" href="home">Vinoteca</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" style="font-family:italic;" href="products">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-family:italic;" href="brands">Marcas</a>
          </li>
          {if $admin}
            <li class="nav-item">
              <a class="nav-link" style="font-family:italic;" href="formProd">Formulario Producto</a>
            </li>
          {/if}
          {if $admin}
            <li class="nav-item">
              <a class="nav-link " style="font-family:italic;" href="formBrand">Formulario Marcas</a>
            </li>
          {/if}
        </ul>
        <ul class="nav justify-content-end">
          {if !($admin)}
            <li class="nav-item">
              <a class="nav-link" class="navbar-brand" style="color:black" href="login">Iniciar sesion</a>
            </li>
          {else}
            <li class="nav-item ml-auto">
              <a class="nav-link" class="navbar-brand" style="color:black; " href="logout">Cerrar sesion
                ({$smarty.session.USER_EMAIL})</a>
            </li>
          {/if}
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>