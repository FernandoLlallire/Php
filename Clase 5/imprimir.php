<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <?php
  //    var_dump($_GET["e-mail"]);para que se sea por metodo post
foreach ($_POST  as $valor) {
  echo "$clave: $valor <br>";
}
    ?>
  </body>
</html>
