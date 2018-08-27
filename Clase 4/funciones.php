<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejericio 1</title>
  </head>
  <body>
    <?php
      $numeroMagico=15;
        function mayor($num1,$num2,$num3=NULL){
          if(!is_numeric($num3)||$num3==NULL){
            global $numeroMagico;
            $num3=$numeroMagico;
          }/*
          if($num1==$num2&&$num1==$num3)
            return $num1;
          elseif ($num1>$num2 && $num1>$num3)
            return $num1;
          elseif($num2>$num1&& $num2>$num3)
            return $num2;
          else return $num3;*/
        }

        function tabla($base,$limite=NULL){
          if($limite==NULL||!is_numeric($limite)){
            global $numeroMagico;
            $limite=$numeroMagico;
          }
          $arraySalida=[];
          for ($i=$base, $j=0; $i<=$limite ; $i=$i+$base,$j++) {
            $arraySalida[$j]=$i;
          }
          return $arraySalida;
        }
        echo mayor(2,2,4)."<hr>"."<br>";
        foreach (tabla(4,21) as $value) {
          echo $value."<br>";
        }
        echo "<hr>"."<br>";
        echo "Funcion mayor con solo 2 valores mayor (2,4)= ".mayor(2,4)."    El numero magico es 15<hr>"."<br>";

        foreach (tabla(3) as $value) {
          echo $value."<br>";
        }
    ?>
  </body>
</html>
