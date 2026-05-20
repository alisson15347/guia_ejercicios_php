<?php
$precio=$_POST['precio'];
$descuento=($precio * 10) / 100;
if ($precio > 100){
    echo "tiene un descuento del 10%";
   } elseif ( $precio < 100) {
    echo "precio original";
    }
    ?>