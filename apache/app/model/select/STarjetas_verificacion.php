<?php
include("../../controller.php");
$criterio = $_REQUEST['criterio'];
$atributo = $_REQUEST['atributo'];
$SQL = "SELECT * FROM tarjetas_verificacion WHERE $atributo LIKE '%$criterio%';";

$conn = connect();

$resultSet = execute($conn, $SQL);
$rows = mysqli_num_rows($resultSet);
$columns = mysqli_field_count($conn);
print("<table>");
print("<tr> <th>Folio Verificación</th> <th>Hora de Salida</th> <th>Motivo de Verificación</th> <th>Folio Certificado</th> <th>Semestre</th> <th>Tipo de Servicio</th> <th>Fecha de Expedición</th> <th>Hora de Entrada</th> <th>ID Centro</th> <th>ID Serie</th> <th>ID Pago</th> </tr>");
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
