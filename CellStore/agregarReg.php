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
<div class="row justify-content-center mt-5">
  <form action="insertarReg.php" method="post">

    <div class="row">
      <div class="col sm 10">
          <h1 class="h3 mb-3 text-center font-weight-normal">Agregar un nuevo articulo</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <label>Marca</label>
      </div>
      <div class="col-sm-6">
        <input type="text" name="marca" class="form-control mb-1" placeholder="Marca" required autofocus>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <label>Modelo</label>
      </div>
      <div class="col-sm-6">
        <input type="text" name="modelo" class="form-control mb-1" placeholder="Modelo" required autofocus>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <label >Color</label>
      </div>
      <div class="col-sm-6">
        <input type="text" name="color" class="form-control mb-1" placeholder="Color" required autofocus>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <label for="lprecio">Precio</label>
      </div>
      <div class="col-sm-6">
        <input type="number" name="precio" class="form-control mb-1" placeholder="Precio" required autofocus>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <label for="lname">Stock</label>
      </div>
      <div class="col-sm-6">
        <input type="number" name="stock" class="form-control mb-1" placeholder="Cantidad" required autofocus>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <button type="submit" class="btn btn-primary mt-2">Agregar Articulo</div>
      </div>
    </div>

  </form>
</div>
<footer class="footer">      
    <span class="text-muted">Hora --:--:--</span>       
    <?php  
    include "componentes/footer.php";
  ?>
  </body>
</html>
