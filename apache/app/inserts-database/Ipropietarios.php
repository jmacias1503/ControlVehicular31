<?php
  $IdPropietario = $_GET['IdPropietario'];
  $CURP = $_GET['CURP'];

  $SQL = "INSERT INTO propietarios(IdPropietario, CURP) VALUES('$IdPropietario', '$CURP');";
  $host = "db";
  $username = "root";
  $password = "sistemas-internet31";
  $database = "controlvehicular31";

  $conn = mysqli_connect($host, $username, $password, $database);

  if ($conn == 0) {
    print("No se pudo conectar a la base de datos");
  }
  $resultSet = mysqli_query($conn, $SQL);
  mysqli_close($conn);
  if ($resultSet == 1){
    print("Consulta realizada correctamente");
  }
  else{
    print("Error al ejecutar la consulta: ".$resultSet->error);
  }
?>
