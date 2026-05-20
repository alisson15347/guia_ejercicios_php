<?php
$nombre=$_POST['nombre'];
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];
$total=$precio * $cantidad;
echo "el total a pagar por $nombre por $cantidad de $producto es: $total";
?>