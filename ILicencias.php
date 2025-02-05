<?php
    $IdLicencia = $_REQUEST['IdLicencia'];
    $ValidoHasta = $_REQUEST['ValidoHasta'];
    $Antiguedad = $_REQUEST['Antiguedad'];
    $Restriccion = $_REQUEST['Restriccion'];
    $NumEmergenia = $_REQUEST['NumEmergenia'];
    $DonadorOrganos = $_REQUEST['DonadorOrganos'];
    $FechaExp = $_REQUEST['FechaExp'];
    $IdConductor = $_REQUEST['IdConductor'];

    print("IdLicencia: ".$IdLicencia."<br>");
    print("ValidoHasta: ".$ValidoHasta."<br>");
    print("Antiguedad: ".$Antiguedad."<br>");
    print("Restriccion: ".$Restriccion."<br>");
    print("NumEmergenia: ".$NumEmergenia."<br>");
    print("DonadorOrganos: ".$DonadorOrganos."<br>");
    print("FechaExp: ".$FechaExp."<br>");
    print("IdConductor: ".$IdConductor."<br>");
?>