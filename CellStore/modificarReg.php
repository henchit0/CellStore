<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="sticky-footer-navbar.css" rel="stylesheet">
    <title>Agregar Articulos</title>
  </head>
  <?php  
    include "componentes/header.php";
  ?>
<main class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-sm-6">
      <h1 class="h3 mb-3 text-center font-weight-normal">Modificar un Registro</h1>
      <form action="hacerModificacion.php" method="post">        
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">ID</label>
          <div class="col-sm-10">
            <input type="text" name="id" class="form-control" placeholder="Ingresar ID a buscar" required autofocus>
          </div>
        </div>
        <div class="row">
          <button type="submit" class="btn btn-primary mt-2">Buscar</div>
        </div>
      </form>
    </div>
  </div>
</main>

<?php  
  include "componentes/footer.php";
?>