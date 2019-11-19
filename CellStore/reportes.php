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
     <div class="col-75">

  <form action="#" method="post">
    <select name="operacion" >
      <option value="marca">Marca</option>
      <option value="modelo">Modelo</option>
      <option value="color">color</option>
    </select>
    <input type="text" name="num1"><br><br>
    <input type="submit" value="Filtrar">  <br>
    <br>
    </form>
    </div>
    </form>
    <table>
      <caption>Listado de Stock disponible</caption>
      <tr>
        <th>Id</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Precio</th>
        <th>Stock</th>
      </tr>
      <tr>
      <?php
        include("conexion.php");
        if (isset($_POST['operacion'])) 
        {        
          $marcaSearch = $_POST['operacion'];
          $dato = $_POST['num1'];

          $sql = "SELECT * FROM stockarticulos WHERE ".$marcaSearch. " = '". $dato."'";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) 
          {
              // salida de dato por cada fila.
              while($row =mysqli_fetch_array($result) ) 
              {
                  echo "<td> " . $row["idArticulo"]. "</td> <td> " . $row["marca"]. "</td><td>" . $row["modelo"]. "</td><td>" . $row["color"]. "</td><td>". $row["precio"]. "</td><td>" . $row["stock"]. "</td></tr>";
                  echo "<br>";
              }
          }       
          $conn->close();
        } else echo "hola";
      ?>
    </table>
    <?php  
  include "componentes/footer.php";
?>