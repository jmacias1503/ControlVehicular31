<?php
  $FolioMultas = $_REQUEST['FolioMultas'];
  $IdPago = $_REQUEST['IdPago'];
  $FolioVerificacion = $_REQUEST['FolioVerificacion'];
  $FolioCirculacion = $_REQUEST['FolioCirculacion'];
  $IdSerie = $_REQUEST['IdSerie'];
  $IdOficial = $_REQUEST['IdOficial'];
  $Causa = $_REQUEST['Causa'];
  $Observaciones = $_REQUEST['Observaciones'];
  $Region = $_REQUEST['Region'];
  $FechaExp = $_REQUEST['FechaExp'];
  $Estado = $_REQUEST['Estado'];
  $Descripcion = $_REQUEST['Descripcion'];
  $Tipo = $_REQUEST['Tipo'];
  $FechaHora = $_REQUEST['FechaHora'];

  $SQL = "INSERT INTO multas(FolioMultas, IdPago, FolioVerificacion, FolioCirculacion, IdSerie, IdOficial, Causa, Observaciones, Region, FechaExp, Estado, Descripcion, Tipo, FechaHora) VALUES('$FolioMultas', '$IdPago', '$FolioVerificacion', '$FolioCirculacion', '$IdSerie', '$IdOficial', '$Causa', '$Observaciones', '$Region', '$FechaExp', '$Estado', '$Descripcion', '$Tipo', '$FechaHora');";
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
