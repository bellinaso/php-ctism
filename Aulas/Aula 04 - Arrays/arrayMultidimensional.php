<?php

    // Matriz 3x3
    $matriz = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
    );
    
    // Printar a matriz

    for($i = 0; $i < count($matriz); $i++) {
        echo ' | ';
        for($j = 0; $j < count($matriz); $j++) {
            echo $matriz[$i][$j]. ' | ';
            
        }
        echo '<br>';
    }

?>