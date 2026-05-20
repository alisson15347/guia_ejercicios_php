<?php
$numero1= $_POST['numero1'];
$numero2= $_POST['numero2'];
if ($numero1 < $numero2 ) {
    echo "el primer numero es menor";
   } elseif ($numero1 > $numero2) {
    echo "el segundo numero es menor";
    }
    ?>