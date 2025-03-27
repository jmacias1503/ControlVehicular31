<!DOCTYPE html>
<html lang = "es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/forms.css">
  </head>
  <body>
    <main>
    <label>Licencias</label>
    <form action="../../model/update/ULicencias.php">
        <label>IdLicencia</label>
        <input type = "number" name="IdLicencia" id="IdLicencia" required="required" maxlength="20">
        <label>ValidoHasta</label>
        <input type = "date" name="ValidoHasta" id="ValidoHasta" required="required">
        <label>Antiguedad</label>
        <input type = "text" name = "Antiguedad" id = "Antiguedad" required="required" maxlength="11">
        <label>Restriccion</label>
        <input type ="text" name="Restriccion" id = "Restriccion" required="required" maxlength="50">
        <label>NumEmergencia</label>
        <input type="text" name = "NumEmergencia" id = "NumEmergencia" required="required" maxlength="15">
        <label>DonadorOrganos</label>
        <input type="text" name = "DonadorOrganos"  id = "DonadorOrganos" required="required" maxlength="2">
        <label>FechaExp</label>
        <input type = "date" name="FechaExp" id = "FechaExp">
        <label>IdConductor</label>
        <input type="number" name="IdConductor" id = "IdConductor" required="required" maxlength="11">
        <input type = "submit">
    </form>
    </main>
    <footer>
    </footer>
  </body>

</html>
