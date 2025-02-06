<?php
    $compuesta = $_POST['compuesta'];
    $CURP = $_POST['CURP'];
    $IdDomicilio = $_POST['IdDomicilio'];

    print("Compuesta: ".$compuesta."<br>");
    print("CURP: ".$CURP."<br>");
    print("IdDomicilio: ".$IdDomicilio."<br>");

    $SQL = "INSERT INTO caso_domicilios VALUES('$compuesta','$CURP','$IdDomicilio');";
    print($SQL);    
?>