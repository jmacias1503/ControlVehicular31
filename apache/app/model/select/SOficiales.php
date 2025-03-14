<!DOCTYPE HTML>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/tables.css">
</head>
<body>
<main>
<table>
<?php
include("../../controller.php");
$criterio = $_REQUEST['criterio'];
$atributo = $_REQUEST['atributo'];
$SQL = "SELECT * FROM oficiales WHERE $atributo LIKE '%$criterio%';";

$conn = connect();

$resultSet = execute($conn, $SQL);
$rows = mysqli_num_rows($resultSet);
$columns = mysqli_field_count($conn);
print("<tr> <th>ID</th> <th>Número de Placa</th> <th>CURP</th> </tr>");
for($i=0;$i<$rows;$i++){
  print("<tr>");
  $selection=mysqli_fetch_row($resultSet);
  for($j=0;$j<$columns;$j++){
    print("<td>$selection[$j]</td>");
  }
  print("</tr>");
}
print("<p>Registers fetched: $rows</p>");
$exit = close($conn);
?>
</table>
</main>
  <footer>
    <span>325724, Alejandro Macías Fonseca</span>
    <span>Grupo 31</span>
  </footer>
</body>
</html>
