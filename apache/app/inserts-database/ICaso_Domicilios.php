<?php
    $compuesta = $_POST['compuesta'];
    $CURP = $_POST['CURP'];
    $IdDomicilio = $_POST['IdDomicilio'];

    /*print("Compuesta: ".$compuesta."<br>");
    print("CURP: ".$CURP."<br>");
    print("IdDomicilio: ".$IdDomicilio."<br>");*/

    $SQL = "INSERT INTO caso_domicilios VALUES('$compuesta','$CURP','$IdDomicilio');";
    //print($SQL);  

    //Connection details
    $servername = "db";
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
