<?php
  include("./controller.php");
  $username=$_POST['username'];
  $password=$_POST['password'];

  $SQL="SELECT * FROM usuarios WHERE username='$username' AND password='$password' AND status='1' and block='0';";
  $conn=connect();
  $resultSet=execute($conn, $SQL);
  $num_rows=mysqli_num_rows($resultSet);
  $row=mysqli_fetch_row($resultSet);
  $exit=close($conn);
  if($num_rows == 0){
    print("Usuario no valido");
  } else {
    print("Usuario valido. Entrando como ");
    if($row[2] == 'A'){
      print("administrador");
    } else if($row[2] == 'U'){
      print("usuario");
    }
  }
?>
