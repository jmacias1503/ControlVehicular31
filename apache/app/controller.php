<?php

function connect(){
  $host = "db";
  $user = "root";
  $password = "sistemas-internet31";
  $database = "controlvehicular31";
  $conn = new mysqli($host, $user, $password, $database);

  return $conn;
}

function execute($conn, $sql){
  $resultSet = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  return $resultSet;
}

function process(){}

function close($conn){
  $exit = mysqli_close($conn);
  return $exit;
}

?>
