<?php
    $numero = $_POST["numero"];
     echo "<h2>sumas seguidas $numero:</h2>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero + $i;
        echo "<li>$numero + $i = $resultado </li>";
    }
    echo "</ul>";
?>