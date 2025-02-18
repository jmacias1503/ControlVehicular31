<?php
    $id = $_REQUEST['id'];
    $numero_placa = $_REQUEST['numero_placa'];
    $curp = $_REQUEST['curp'];
    /*
    print("Id: ".$id."<br>");
    print("NumeroPlaca: ".$numero_placa."<br>");
    print("CURP: ".$curp."<br>");*/

    $SQL = "INSERT INTO oficiales VALUES('$id','$numero_placa','$curp');";
    //print($SQL); 
    //Envio al sistema manejador de base de datos
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
