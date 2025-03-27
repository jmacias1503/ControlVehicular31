<?php
include("../../controller.php");
$IdPropietario = $_REQUEST['IdPropietario'];
$conn = connect();
$resultSet = execute($conn, "SELECT * FROM propietarios WHERE IdPropietario = '$Idpropietario';");
$row = mysqli_fetch_row($resultSet);
close();
?>
<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/forms.css">
  </head>
  <body>
    <main>
  <form action="../../model/update/Upropietarios.php">
    <label>IdPropietario</label>
    <input type="number" name="IdPropietario" id="IdPropietario" required>
    <label>CURP</label>
    <input type="text" name="CURP" id="CURP" value="
<?php
  print($row[1]);
?>
">
    <br>
    <label></label>
    <input type="submit">
  </form>
    </main>
    <footer>
    </footer>
  </body>
</html>
