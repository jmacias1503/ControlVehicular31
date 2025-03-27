<!DOCTYPE html>
<html lang ="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/forms.css">
  </head>
  <body>
    <main>
    <label>Personas</label>
    <form action="../../model/update/UPersonas.php">
        <label>CURP</label>
        <input type="text" name="CURP" id="CURP" required minlength="18" maxlength="18" pattern="[A-Z]{4}[0-9]{6}[HM]{1}[A-Z]{5}[A-Z0-9]{2}">
        <label>Nombre</label>
        <input type="text" name="Nombre" id="Nombre" required maxlength="50">
        <label>ApellidoP</label>
        <input type="text" name="ApellidoP" id="ApellidoP" required maxlength = "50">
        <label>ApellidoM</label>
        <input type="text" name="ApellidoM" id="ApellidoM" required maxlength="50">
        <label>FechaNac</label>
        <input type="date" name="FechaNac" id="FechaNac" required>
        <label>Sexo</label>
        <input type="number" name="Sexo" id="Sexo" required maxlength="2">
        <label>Firma</label>
        <input type="text" name="Firma" id="Firma" required maxlength="200">
        <input type="submit">
    </form>
    </main>
    <footer>
    </footer>
  </body>
</html>
