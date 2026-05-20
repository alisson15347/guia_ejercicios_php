<?php
$celcius=$_POST['celcius'];
$gradosFahrenheit =($celcius * 1.8) + 32;
echo "la temperatura en grados fahrenheit es de:" . $gradosFahrenheit;