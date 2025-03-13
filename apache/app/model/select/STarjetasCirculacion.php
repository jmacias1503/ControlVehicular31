<?php
include("../../controller.php");
$criterio = $_REQUEST['criterio'];
$atributo = $_REQUEST['atributo'];
$SQL = "SELECT * FROM tarjetas_circulacion WHERE $atributo LIKE '%$criterio%';";

$conn = connect();

$resultSet = execute($conn, $SQL);
$rows = mysqli_num_rows($resultSet);
$columns = mysqli_field_count($conn);
print("<table>");
print("<tr> <th>Folio Circulación</th> <th>ID Pago</th> <th>Número de Constancia</th> <th>Origen</th> <th>Clave Vehicular</th> <th>Tipo</th> <th>Uso</th> <th>RPA</th> <th>Operación</th> <th>Placa Anterior</th> <th>Oficina Expendidora</th> <th>Movimiento</th> <th>Vigencia</th> </tr>");
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
