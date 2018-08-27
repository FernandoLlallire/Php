<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <!--
      Formulario para get
      <form class="formulario" action="imprimir.php" method="get"> -->
      <form class="formulario" action="imprimir.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="e-mail">E-mail: </label>
        <input type="email" name="e-mail" id="email">
        <br>
        <button type="summit">Envia lo dato vite</button>
    </form>
  </body>
</html>
<!-- // TODO: Todo lo que se ponga con la etiqueta name es eviado como
parametro del formulario, si por ejemplo el boton tuviera asignado un name
el formulario me enviaria el button tmb!! -->
