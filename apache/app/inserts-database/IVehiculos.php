<?php
    $IdSerie = $_REQUEST['IdSerie'];
    $FolioCirculacion = $_REQUEST['FolioCirculacion'];
    $IdPropietario = $_REQUEST['IdPropietario'];
    $Color = $_REQUEST['Color'];
    $Ano = $_REQUEST['Ano'];
    $Clase = $_REQUEST['Clase'];
    $Combustible = $_REQUEST['Combustible'];
    $NIV = $_REQUEST['NIV'];
    $NumCilindros = $_REQUEST['NumCilindros'];
    $Modelo = $_REQUEST['Modelo'];
    $Marca = $_REQUEST['Marca'];

    /*
    print("IdSerie: ".$IdSerie."<br>");
    print("FolioCirculacion: ".$FolioCirculacion."<br>");
    print("IdPropietario: ".$IdPropietario."<br>");
    print("Color: ".$Color."<br>");
    print("Ano: ".$Ano."<br>");
    print("Clase: ".$Clase."<br>");
    print("Combustible: ".$Combustible."<br>");
    print("NIV: ".$NIV."<br>");
    print("NumCilindros: ".$NumCilindros."<br>");
    print("Modelo: ".$Modelo."<br>");
    print("Marca: ".$Marca."<br>");*/

    $SQL = "INSERT INTO vehiculos VALUES('$IdSerie','$FolioCirculacion','$IdPropietario','$Color','$Ano','$Clase','$Combustible','$NIV','$NumCilindros','$Modelo','$Marca');";

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
