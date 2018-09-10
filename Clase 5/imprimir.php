<?php
var_dump(isnull($_GET));
if(!isnull($_GET)){
  foreach ($_GET as $posicion=>$valor) {
    echo "<br>En la posicion \"".$posicion."\" el \$_GET tiene ".$valor." <br>";
  }
}
if(!isnull($_POST)){
  foreach ($_POST as $posicion=>$valor) {
    echo "<br>En la posicion \"".$posicion."\" el \$_POST tiene ".$valor." <br>";
  }
}
 ?>
