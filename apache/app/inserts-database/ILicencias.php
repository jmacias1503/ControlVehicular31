<?php
    $IdLicencia = $_REQUEST['IdLicencia'];
    $ValidoHasta = $_REQUEST['ValidoHasta'];
    $Antiguedad = $_REQUEST['Antiguedad'];
    $Restriccion = $_REQUEST['Restriccion'];
    $NumEmergencia = $_REQUEST['NumEmergencia'];
    $DonadorOrganos = $_REQUEST['DonadorOrganos'];
    $FechaExp = $_REQUEST['FechaExp'];
    $IdConductor = $_REQUEST['IdConductor'];
    /*
    print("IdLicencia: ".$IdLicencia."<br>");
    print("ValidoHasta: ".$ValidoHasta."<br>");
    print("Antiguedad: ".$Antiguedad."<br>");
    print("Restriccion: ".$Restriccion."<br>");
    print("NumEmergencia: ".$NumEmergencia."<br>");
    print("DonadorOrganos: ".$DonadorOrganos."<br>");
    print("FechaExp: ".$FechaExp."<br>");
    print("IdConductor: ".$IdConductor."<br>");*/

    $SQL = "INSERT INTO licencias VALUES('$IdLicencia','$ValidoHasta','$Antiguedad','$Restriccion','$NumEmergencia','$DonadorOrganos','$FechaExp','$IdConductor');";
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
