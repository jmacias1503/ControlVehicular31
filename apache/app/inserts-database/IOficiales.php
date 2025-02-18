<?php
    $id = $_REQUEST['id'];
    $numero_placa = $_REQUEST['numero_placa'];
    $curp = $_REQUEST['curp'];

    print("Id: ".$id."<br>");
    print("NumeroPlaca: ".$numero_placa."<br>");
    print("CURP: ".$curp."<br>");

    $SQL = "INSERT INTO oficiales VALUES('$id','$numero_placa','$curp');";
    print($SQL);  
?>