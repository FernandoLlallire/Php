<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejericio 6</title>
  </head>
  <body>
    <?php
      $decimal= 1.25;
      $entero= 5;
      echo "La suma de ($decimal+$entero) es= ". ($decimal+$entero);
      echo "<br>La resta de ($decimal-$entero) es= ". ($decimal-$entero);
      echo "<br>La multiplicacion de ($decimal*$entero) es= ". ($decimal*$entero);
      echo "<br>La division de ($decimal/$entero) es= ". ($decimal/$entero);
      echo "<br>La division de ($entero/$decimal) es= ". ($entero/$decimal);
      $div1=$decimal/$entero;
      $div2=$entero/$decimal;
      echo "<pre>";
      echo "<br>La division de ($decimal/$entero) es= ";
      var_dump($div1);
      echo "<br>La division de ($entero/$decimal) es= ";
      var_dump($div2);
      echo "<pre>";
      $entrero++;
      $decimal++;
      Sumarle 1 a $entero y $decimal.
Sumarle 5 a $entero y restarle 0.6 a $decimal.
En una misma línea, crear la variable $resultado, cuyo valor sea el resultado de multiplicar $entero * 2, sumarle $decimal, y dividir todo por la mitad de $entero
     ?>
  </body>
</html>
