<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <?php
      $auto=["marca"=>["renault","vw"],
             "Modelo"=>["gol","laguna"],
             "color"=>["rojo","gris","blanco"],
             "año"=>[1991,2000,2018],
             "patente"=>["acc123","ksd231"]
            ];
      $auto[0]="Fernando llallire";
      var_dump($auto);
      echo $auto[0][1];
     ?>
  </body>
</html>
