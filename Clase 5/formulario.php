<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario PHP</title>
  </head>
  <body>
    <!-- <form action="imprimir.php" method="get"> Para envio de archivos mediante get-->
    <form action="imprimir.php" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre">
      <br>
      <label for="email">E-mail:</label>
      <input type="email" name="email" id="email">
      <br>
      <button type="submit">Dale Caña</button>
    </form>
  </body>
</html>
