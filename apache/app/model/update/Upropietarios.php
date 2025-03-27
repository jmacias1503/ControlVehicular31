<?php
  include("../../controller.php");
  $IdPropietario = $_GET['IdPropietario'];
  $CURP = $_GET['CURP'];

  $SQL = "UPDATE propietarios SET CURP = '$CURP' WHERE Idpropietario = '$IdPropietario';";
  $conn = connect();

  $resultSet = execute($conn, $SQL);
  $numRows = mysqli_affected_rows($conn);
  $exit = close($conn);
  if ($numRows == 1){
    print("1 registro afectado");
  }
  else{
    print("0 registros afectados");
  }
?>
