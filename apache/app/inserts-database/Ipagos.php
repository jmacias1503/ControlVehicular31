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
  $host = "localhost";
  $username = "root";
  $password = "sistemas-internet31";
  $database = "controlvehicular31";

  $conn = mysqli_connect($host, $username, $password, $database);

  if ($conn == 0) {
    print("No se pudo conectar a la base de datos");
  }
  $resultSet = mysqli_query($SQL);
  mysqli_close($conn);
  if ($resultSet == 1){
    print("Consulta realizada correctamente");
  }
  else{
    print("Error al ejecutar la consulta: ".$resultSet->error);
  }
?>
