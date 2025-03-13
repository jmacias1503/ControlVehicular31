<?php
include("../../controller.php");
$criterio = $_REQUEST['criterio'];
$atributo = $_REQUEST['atributo'];
$SQL = "SELECT * FROM domicilios WHERE $atributo LIKE '%$criterio%';";

$conn = connect();

$resultSet = execute($conn, $SQL);
$rows = mysqli_num_rows($resultSet);
$columns = mysqli_field_count($conn);
print("<table>");
print("<tr> <th>ID Domicilio</th> <th>Número Interior</th> <th>Número Exterior</th> <th>Código Postal</th> <th>Estado</th> <th>Ciudad</th> <th>Colonia</th> <th>Calle</th> </tr>");
for($i=0;$i<$rows;$i++){
  print("<tr>");
  $selection=mysqli_fetch_row($resultSet);
  for($j=0;$j<$columns;$j++){
    print("<td>$selection[$j]</td>");
  }
  print("</tr>");
}
print("</table>");
print("<p>Registers fetched: $rows</p>");
$exit = close($conn);
?>
