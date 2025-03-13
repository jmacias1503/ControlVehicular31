<?php
include("../../controller.php");
$criterio = $_REQUEST['criterio'];
$atributo = $_REQUEST['atributo'];
$SQL = "SELECT * FROM pagos WHERE $atributo LIKE '%$criterio%';";

$conn = connect();

$resultSet = execute($conn, $SQL);
$rows = mysqli_num_rows($resultSet);
$columns = mysqli_field_count($conn);
print("<table>");
print("<tr> <th>ID</th> <th>Transacción</th> <th>Folio</th> <th>Fecha Límite de Pago</th> <th>Importe</th> <th>Tipo de Pago</th> <th>Fecha y Hora</th> <th>Código de Barras</th> </tr>");
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
