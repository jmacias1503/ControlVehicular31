<!DOCTYPE html>
<html lang= "es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/forms.css">
  </head>
  <body>
    <main>
    <label>Oficiales</label>
    <form action="../../model/update/UOficiales.php">
        <label>id</label>
        <input type ="number" name="id" id="id" required maxlength="11">
        <label>numero_placa</label>
        <input type="number" name="numero_placa" id="numero_placa" required maxlength="11"> 
        <label>curp</label>
        <input type="text" name="curp" id="curp" required minlength="18" maxlength="18" pattern="[A-Z]{4}[0-9]{6}[HM]{1}[A-Z]{5}[A-Z0-9]{2}">
        <input type="submit">
    </form>
    </main>
    <footer>
    </footer>
  </body>
</html>
