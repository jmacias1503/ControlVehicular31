<?php
    $CURP = $_REQUEST['CURP'];
    $Nombre = $_REQUEST['Nombre'];
    $ApellidoP = $_REQUEST['ApellidoP'];
    $ApellidoM = $_REQUEST['ApellidoM'];
    $FechaNac = $_REQUEST['FechaNac'];
    $Sexo = $_REQUEST['Sexo'];
    $Firma = $_REQUEST['Firma'];

    print("CURP: ".$CURP."<br>");
    print("Nombre: ".$Nombre."<br>");
    print("ApellidoP: ".$ApellidoP."<br>");
    print("ApellidoM: ".$ApellidoM."<br>");
    print("FechaNac: ".$FechaNac."<br>");
    print("Sexo: ".$Sexo."<br>");
    print("Firma: ".$Firma."<br>");

    //Formar instruccion sql

    $SQL = "INSERT INTO personas VALUES('$CURP','$Nombre','$ApellidoP','$ApellidoM','$FechaNac','$Sexo','$Firma');"; 
    print($SQL);
?>