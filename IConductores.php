<?php
    $idConductor = $_POST['idConductor'];
    $CURP = $_POST['CURP'];

    print("IdConductor: ".$idConductor."<br>");
    print("CURP: ".$CURP."<br>");

    $SQL = "INSERT INTO conductores VALUES('$idConductor','$CURP');";
    print($SQL);
?>