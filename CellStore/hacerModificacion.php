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
  <main>
    <div class="row justify-content-center mt-5">
      <form action="guardarModificacion.php" method="post">
        <?php
          error_reporting(0);
          include("conexion.php");
          $id = $_POST['id'];

          $flag = false;

          $sql = "SELECT * FROM stockarticulos where idArticulo = ".$id;
          // var_dump($sql);
          // die();
          $result = $conn->query($sql);

          if ($result->num_rows > 0) 
          {    
            while($row =mysqli_fetch_array($result) ) 
            {

            ?>
              <div class="row">
                <div class="col sm 10">
                    <h1 class="h3 mb-3 text-center font-weight-normal">Modificar articulo</h1>
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-6">
                  <label>ID</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="idArticulo" class="form-control mb-1" value="<?php echo htmlspecialchars($row['idArticulo']);?>" required autofocus>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <label>Marca</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="marca" class="form-control mb-1" value="<?php echo htmlspecialchars($row['marca']);?>" required autofocus>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <label>Modelo</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="modelo" class="form-control mb-1" value="<?php echo htmlspecialchars($row['modelo']);?>" required autofocus>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <label >Color</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="color" class="form-control mb-1" value="<?php echo htmlspecialchars($row['color']);?>" required autofocus>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <label for="lprecio">Precio</label>
                </div>
                <div class="col-sm-6">
                  <input type="number" name="precio" class="form-control mb-1" value="<?php echo htmlspecialchars($row['precio']);?>" required autofocus>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <label for="lname">Stock</label>
                </div>
                <div class="col-sm-6">
                  <input type="number" name="stock" class="form-control mb-1" value="<?php echo htmlspecialchars($row['stock']);?>" required autofocus>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <button type="submit" class="btn btn-primary mt-2">Guardar</button>
                </div>
              </div>
            <?php 
            }
              
          } 
          else 
          {
            echo "0 results";
          }
          $conn->close();
        ?>
      </form>  
    </div>
  </main>
  <?php  
    include "componentes/footer.php";
  ?>