<?php
$nombre=$_POST['nombre'];
$horas=$_POST['horas'];
$pago=$_POST['pago'];
$salario = ($pago * $horas);
echo "el salario total es de: " . $salario;