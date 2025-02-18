<?php
  $IdDomicilio = $_GET['IdDomicilio'];
  $NumInt = $_GET['NumInt'];
  $NumExt = $_GET['NumExt'];
  $CP = $_GET['CP'];
  $Estado = $_GET['Estado'];
  $Ciudad = $_GET['Ciudad'];
  $Colonia = $_GET['Colonia'];
  $Calle = $_GET['Calle'];

  $SQL = "INSERT INTO domicilios(IdDomicilio, NumInt, NumExt, CP, Estado, Ciudad, Colonia, Calle) VALUES('$IdDomicilio', '$NumInt', '$NumExt', '$CP', '$Estado', '$Ciudad', '$Colonia', '$Calle');";
  $host = "localhost";
  $username = "root";
  $password = "sistemas-internet31";
  $database = "controlvehicular31";

  $conn = new msqli($host, $username, $password, $database);

  $resultSet = mysqli_query($SQL);
  mysqli_close($conn);
  if ($resultSet == 1){
    print("Consulta realizada correctamente");
  }
  else{
    print("Error al ejecutar la consulta: ".$resultSet->error);
  }
?>
