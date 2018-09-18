<?php
$numeroMagico=255;
function mayor ($number1,$number2,$number3=""){
  if(is_null($number3)||!is_numeric($number3)){
    global $numeroMagico;//Tengo q definir mi scope para oider usar el numero magico
    return (($number1>$number2) ? (($number1>$numeroMagico) ? $number1 : $numeroMagico) : (($number2>$numeroMagico) ? $number2 : $numeroMagico));
  }else{
    return (($number1>$number2) ? (($number1>$number3) ? $number1 : $number3) : (($number2>$number3) ? $number2 : $number3));
  }
}
echo "el resultado de mayor() es ".mayor(4,7)."<br>";
function tabla ($base,$limite=""){
  $cuenta=1;
  if (is_null($limite)||!is_numeric($limite)){
    global $numeroMagico;
    $limite=$numeroMagico;
  }
  while($cuenta<$limite){
    $cuenta*=$base;
    echo (($cuenta<$limite)?$cuenta:"")."<br>";
  }
}
echo tabla(2)."<br>";
 ?>
