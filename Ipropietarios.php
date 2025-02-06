<?php
  $IdPropietario = $_GET['IdPropietario'];
  $CURP = $_GET['CURP'];

  print("IdPropietario: ".$IdPropietario."<br>");
  print("CURP: ".$CURP."<br>");
  $SQL = "INSERT INTO propietarios(IdPropietario, CURP) VALUES('$IdPropietario', '$CURP');";
  print($SQL);
?>
