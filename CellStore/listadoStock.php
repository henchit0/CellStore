<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <?php  
    include "componentes/header.php";
  ?>
  <body>
    <div class="row justify-content-center mt-5">
      <div class="col-sm-10">      
        <table class="table table-hover table-light">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col">Marca</th>
              <th scope="col">Modelo</th>
              <th scope="col">Color</th>
              <th scope="col">Precio</th>
              <th scope="col">Cantidad</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include("conexion.php");

            $sql = "SELECT * FROM stockarticulos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // salida de dato por cada fila.
              // mysqli_fetch_array($resultados)   $result->fetch_assoc()
                while($row =mysqli_fetch_array($result) ) {
                    echo "<th scope='row'>".$row["idArticulo"]."</th> <td> ".$row["marca"]."</td><td>".$row["modelo"]."</td><td>". $row["color"]."</td><td>".$row["precio"]."</td><td>".$row["stock"]."</td></tr>";
                    echo "<br>";
                }
            } 
            $conn->close();
            ?>          
          </tbody>
        </table>
      </div>
    </div>  
  <?php  
    include "componentes/footer.php";
  ?>
  </body>
</html>
