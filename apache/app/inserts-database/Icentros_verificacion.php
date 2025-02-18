<?php
  $idCentro = $_POST['IdCentro'];
  $idDomicilio = $_POST['IdDomicilio'];
  $nombre = $_POST['Nombre'];

  $SQL = "INSERT INTO centros_verificacion(IdCentro, IdDomicilio, Nombre) VALUES('$idCentro', '$idDomicilio', '$nombre');";

  $host = "db";
  $username = "root";
  $password = "sistemas-internet31";
  $database = "controlvehicular31";

  $conn = mysqli_connect($host, $username, $password, $database);

  $resultSet = mysqli_query($conn, $SQL);
  mysqli_close($conn);
  if ($resultSet == 1){
    print("Consulta realizada correctamente");
  }
  else{
    print("Error al ejecutar la consulta: ".$resultSet->error);
  }
?>
