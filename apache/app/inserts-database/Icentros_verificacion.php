<?php
  $idCentro = $_POST['IdCentro'];
  $idDomicilio = $_POST['IdDomicilio'];
  $nombre = $_POST['Nombre'];

  $SQL = "INSERT INTO centros_verificacion(IdCentro, IdDomicilio, Nombre) VALUES('$idCentro', '$idDomicilio', '$nombre');";

  $host = "localhost";
  $username = "root";
  $password = "";
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
