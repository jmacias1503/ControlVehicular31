<?php
  $idCentro = $_POST['IdCentro'];
  $idDomicilio = $_POST['IdDomicilio'];
  $nombre = $_POST['Nombre'];

  print("IdCentro".$idCentro."<br>");
  print("IdDomicilio".$idDomicilio."<br>");
  print("Nombre".$nombre."<br>");

  $SQL = "INSERT INTO centros_verificacion(IdCentro, IdDomicilio, Nombre) VALUES('$idCentro', '$idDomicilio', '$nombre');";
  print($SQL);
?>
