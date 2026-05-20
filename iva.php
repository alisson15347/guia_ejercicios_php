<?php
$producto = $_POST['producto'];

 echo "<center>";
 echo "<body bgcolor='lightgreen'>";

$total = $producto * 1.13;
echo "El precio del total incluido con IVA es: $ " . $total;

 echo "</center>";
 echo "</body>";
?>