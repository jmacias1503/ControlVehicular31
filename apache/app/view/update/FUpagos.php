<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/forms.css">
  </head>
  <body>
    <main>
  <form action="../../model/update/Upagos.php">
    <label>id</label>
    <input type="number" name="id" id="id" required>
    <br>
    <label>transaccion</label>
    <input type="text" name="transaccion" id="transaccion" required>
    <br>
    <label>folio</label>
    <input type="number" name="folio" id="folio" required>
    <br>
    <label>fechaLimPago</label>
    <input type="date" name="fechaLimPago" id="fechaLimPago>" required>
    <br>
    <label>Importe</label>
    <input type="number" name="Importe" id="Importe" required>
    <br>
    <label>TipoPago</label>
    <input type="text" name="TipoPago" id="TipoPago">
    <br>
    <label>FechayHora</label>
    <input type="datetime" name="FechayHora" id="FechayHora">
    <br>
    <label>CodigoBarras</label>
    <input type="text" name="CodigoBarras" id="CodigoBarras">
    <br>
    <label></label>
    <input type="submit">
  </form>
    </main>
    <footer>
    </footer>
  </body>
</html>
