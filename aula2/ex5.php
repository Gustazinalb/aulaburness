<?php
    include "menu.php";

    $frutas = array("morango","abacaxi","abacate","melancia", "uva");

    print_r($frutas);
    
    echo "<p> $frutas[1]";

    unset($frutas[2]);

    foreach ($frutas as $fruta){
        echo "<p>A fruta é {$fruta}";
    }
?>    