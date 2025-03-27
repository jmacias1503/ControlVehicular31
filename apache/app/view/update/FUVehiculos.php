<!DOCTYPE html>
<html lang ="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/forms.css">
  </head>
  <body>
    <main>
    <label>Vehiculos</label>
    <form action = "../../model/update/UVehiculos.php">
        <label>IdSerie</label>
        <input type="number" name="IdSerie" id="IdSerie" required maxlength="11">
        <label>FolioCirculacion</label>
        <input type="number" name="FolioCirculacion" id="FolioCirculacion" required maxlength="11">
        <label>IdPropietario</label>
        <input type="number" name = "IdPropietario" id = "IdPropietario" required maxlength="11">
        <label>Color</label>
        <input type ="text" name="Color" id = "Color" required maxlength="100">
        <label>Ano</label>
        <input type="text" name = "Ano" id = "Ano" maxlength="4">
        <label>Clase</label>
        <input type="text" name = "Clase"  id = "Clase" maxlength="50">
        <label>Combustible</label>
        <input type = "text" name="Combustible" id = "Combustible" maxlength="20">
        <label>NIV</label>
        <input type="text" name="NIV" id = "NIV" required maxlength="17">
        <label>NumCilindros</label>
        <input type="number" name="NumCilindros" id = "NumCilindros" maxlength="11">
        <label>Modelo</label>
        <input type="text" name="Modelo" id = "Modelo" maxlength="20">
        <label>Marca</label>
        <input type="text" name="Marca" id = "Marca" maxlength="20">
        <input type="submit">
    </form>
    </main>
    <footer>
    </footer>
  </body>
</html>
