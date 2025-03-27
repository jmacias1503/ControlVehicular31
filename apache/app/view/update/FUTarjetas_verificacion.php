<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/forms.css">
  </head>
  <body>
    <main>
  <form action="../../model/update/UTarjetas_verificacion.php">
    <label>FolioVerificacion</label>
    <input type="number" name="FolioVerificacion" id="FolioVerificacion" required>
    <br>
    <label>HoraSalida</label>
    <input type="time" name="HoraSalida" id="HoraSalida" required>
    <br>
    <label>MotivoVerificacion</label>
    <input type="text" name="MotivoVerificacion" id="MotivoVerificacion" required>
    <br>
    <label>FolioCertificado</label>
    <input type="number" name="FolioCertificado" id="FolioCertificado">
    <br>
    <label>Semestre</label>
    <select name="Semestre" id="Semestre" required>
      <option value="0">Primer semestre</option>
      <option value="1">Segundo semestre</option>
    </select>
    <br>
    <label>TipoServicio</label>
    <input type="text" name="TipoServicio" id="TipoServicio">
    <br>
    <label>FechaExp</label>
    <input type="date" name="FechaExp" id="FechaExp" required>
    <br>
    <label>HoraEntrada</label>
    <input type="time" name="HoraEntrada" id="HoraEntrada" required>
    <br>
    <label>IdCentro</label>
    <input type="number" name="IdCentro" id="IdCentro" required>
    <br>
    <label>IdSerie</label>
    <input type="number" name="IdSerie" id="IdSerie" required>
    <br>
    <label>IdPago</label>
    <input type="number" name="IdPago" id="IdPago" required>
    <br>
    <label></label>
    <input type="submit">
  </form>
    </main>
    <footer>
    </footer>
  </body>
</html>
