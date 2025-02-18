<?php
    $CURP = $_REQUEST['CURP'];
    $Nombre = $_REQUEST['Nombre'];
    $ApellidoP = $_REQUEST['ApellidoP'];
    $ApellidoM = $_REQUEST['ApellidoM'];
    $FechaNac = $_REQUEST['FechaNac'];
    $Sexo = $_REQUEST['Sexo'];
    $Firma = $_REQUEST['Firma'];
    /*
    print("CURP: ".$CURP."<br>");
    print("Nombre: ".$Nombre."<br>");
    print("ApellidoP: ".$ApellidoP."<br>");
    print("ApellidoM: ".$ApellidoM."<br>");
    print("FechaNac: ".$FechaNac."<br>");
    print("Sexo: ".$Sexo."<br>");
    print("Firma: ".$Firma."<br>");*/

    //Formar instruccion sql

    $SQL = "INSERT INTO personas VALUES('$CURP','$Nombre','$ApellidoP','$ApellidoM','$FechaNac','$Sexo','$Firma');"; 
    //print($SQL);

    $servername = "localhost";
    $username = "root";
    $password = "sistemas-internet31";
    $dbname = "controlvehicular31";

    $conn = new mysqli($servername, $username, $password, $dbname); // Create connection

    $ResultSet = mysqli_query($conn, $SQL); // Execute the query
    mysqli_close($conn); // Close the connection
    if($ResultSet == 1){
        print("Actualizado correctamente"); //Process the result
    }
    else{
        print("Error al actualizar".$ResultSet->error);
    }
?>
