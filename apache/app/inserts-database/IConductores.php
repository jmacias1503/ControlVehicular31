<?php
    $idConductor = $_POST['idConductor'];
    $CURP = $_POST['CURP'];
    /*
    print("IdConductor: ".$idConductor."<br>");
    print("CURP: ".$CURP."<br>");*/

    $SQL = "INSERT INTO conductores VALUES('$idConductor','$CURP');";
    //print($SQL);

    $servername = "localhost";
    $username = "root";
    $password = "";
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