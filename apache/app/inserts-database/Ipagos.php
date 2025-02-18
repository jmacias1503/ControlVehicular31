<?php
  $id = $_POST['id'];
  $transaccion = $_POST['transaccion'];
  $folio = $_POST['folio'];
  $fechaLimPago = $_POST['fechaLimPago'];
  $Importe = $_POST['Importe'];
  $TipoPago = $_POST['TipoPago'];
  $FechayHora = $_POST['FechayHora'];
  $CodigoBarras = $_POST['CodigoBarras'];

  $SQL = "INSERT INTO pagos(id, transaccion, folio, fechaLimPago, Importe, TipoPago, FechayHora, CodigoBarras) VALUES('$id', '$transaccion', '$folio', '$fechaLimPago', '$Importe', '$TipoPago', '$FechayHora', '$CodigoBarras');";
  $host = "db";
  $username = "root";
  $password = "sistemas-internet31";
  $database = "controlvehicular31";

  $conn = new mysqli($host, $username, $password, $database);

  $resultSet = mysqli_query($conn, $SQL);
  mysqli_close($conn);
  if ($resultSet == 1){
    print("Consulta realizada correctamente");
  }
  else{
    print("Error al ejecutar la consulta: ".$resultSet->error);
  }
?>
