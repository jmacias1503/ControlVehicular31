<?php
include("./controller.php");
$username=$_POST['username'];
$password=$_POST['password'];

$SQL="SELECT * FROM usuarios WHERE username='$username';";
$conn=connect();
$resultSet=execute($conn, $SQL);
$num_rows=mysqli_num_rows($resultSet);
if($num_rows == 0) {
  print("Usuario no valido");
  header("Location: ./Facceso.html");
  $exit=close($conn);
  exit();
} 
$row=mysqli_fetch_row($resultSet);
if($row[3] == 0 || $row[4] == 1){
  print("Cuenta sin acceso, contacte al administrador");
  header("Location: ./Facceso.html");
  $exit=close($conn);
  exit();
}
if($row[1] != $password) {
  $updateTries = "UPDATE usuarios SET tries = tries + 1 WHERE username = $username;";
  execute($conn, $updateTries);
  $resultSet=execute($conn, $SQL);
  $row=mysqli_fetch_row($resultSet);
  print("Contraseña incorrecta. Intentos restantes, ".4 - $row[5]."<br>");
  if ($row[5] > 3) {
    $blockAccount = "UPDATE usuarios SET block = TRUE, SET tries = 0 WHERE username = $username;";
    execute($conn, $blockAccount);
    print("Intentos maximos alcanzados, cuenta bloqueada");
    header("Location: ./Facceso.html");
    $exit=close($conn);
    exit();
  }
  header("Location: ./Facceso.html");
  $exit=close($conn);
  exit();
} 
$exit=close($conn);
print("Usuario valido. Entrando como ");
if($row[2] == 'A'){
  print("administrador");
  header("Location: ./menu-administrador.html");
  exit();
} else if($row[2] == 'U'){
  print("usuario");
  header("Location: ./menu-menu-usuario.html");
  exit();
}
?>
