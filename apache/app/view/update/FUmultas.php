<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/forms.css">
  </head>
  <body>
    <main>
  <form action="../../model/update/Umultas.php">
    <label>FolioMultas</label>
    <input type="number" name="FolioMultas" id="FolioMultas" required>
    <br>
    <label>IdPago</label>
    <input type="number" name="IdPago" id="IdPago" required>
    <br>
    <label>FolioVerificacion</label>
    <input type="number" name="FolioVerificacion" id="FolioVerificacion" required>
    <br>
    <label>FolioCirculacion</label>
    <input type="number" name="FolioCirculacion" id="FolioCirculacion" required>
    <br>
    <label>IdSerie</label>
    <input type="number" name="IdSerie" id="IdSerie" required>
    <br>
    <label>IdOficial</label>
    <input type="number" name="IdOficial" id="IdOficial" required>
    <br>
    <label>Causa</label>
    <textarea name="Causa" id="Causa" cols="50" rows="4" required></textarea>
    <br>
    <label>Observaciones</label>
    <textarea name="Observaciones" id="Observaciones" cols="50" rows="3"></textarea>
    <br>
    <label>Region</label>
    <input type="text" name="Region" id="Region" required>
    <br>
    <label>FechaExp</label>
    <input type="date" name="FechaExp" id="FechaExp" required>
    <br>
    <label>Estado</label>
    <input type="text" name="Estado" id="Estado" required>
    <br>
    <label>Descripcion</label>
    <textarea name="Descripcion" id="Descripcion" cols="60" rows="5"></textarea>
    <br>
    <label>Tipo</label>
    <input type="text" name="Tipo" id="Tipo" required>
    <br>
    <label>FechaHora</label>
    <input type="time" name="FechaHora" id="FechaHora" required>
    <br>
    <label></label>
    <input type="submit">
  </form>
    </main>
    <footer>
    </footer>
  </body>
</html>
