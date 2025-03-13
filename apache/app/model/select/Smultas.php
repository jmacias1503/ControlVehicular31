<?php
include("../../controller.php");
$criterio = $_REQUEST['criterio'];
$atributo = $_REQUEST['atributo'];
$SQL = "SELECT * FROM multas WHERE $atributo LIKE '%$criterio%';";

$conn = connect();

$resultSet = execute($conn, $SQL);
$rows = mysqli_num_rows($resultSet);
$columns = mysqli_field_count($conn);
print("<table>");
print("<tr> <th>Folio Multas</th> <th>ID Pago</th> <th>Folio Verificación</th> <th>Folio Circulación</th> <th>ID Serie</th> <th>ID Oficial</th> <th>Causa</th> <th>Observaciones</th> <th>Región</th> <th>Fecha de Expedición</th> <th>Estado</th> <th>Descripción</th> <th>Tipo</th> <th>Fecha y Hora</th> </tr>");
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
