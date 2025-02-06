<?php
  $id = $_POST['id'];
  $transaccion = $_POST['transaccion'];
  $folio = $_POST['folio'];
  $fechaLimPago = $_POST['fechaLimPago'];
  $Importe = $_POST['Importe'];
  $TipoPago = $_POST['TipoPago'];
  $FechayHora = $_POST['FechayHora'];
  $CodigoBarras = $_POST['CodigoBarras'];

  print("id: ".$id."<br>");
  print("transaccion: ".$transaccion."<br>");
  print("folio: ".$folio."<br>");
  print("fechaLimPago: ".$fechaLimPago."<br>");
  print("Importe: ".$Importe."<br>");
  print("TipoPago: ".$TipoPago."<br>");
  print("FechayHora: ".$FechayHora."<br>");
  print("CodigoBarras: ".$CodigoBarras."<br>");
?>
