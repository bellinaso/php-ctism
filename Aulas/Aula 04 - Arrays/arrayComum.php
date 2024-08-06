<?php
    // $carros = [0=>'Corsa', 1=>'Gol', 2=>'Fit'];
    $carros = ['Corsa', 'Gol', 'Fit'];

    for($i = 0; $i < count($carros); $i++) {
        echo $carros[$i].'<br>';
    }

    echo '<hr>';
    
    //..array......key.....value
    foreach($carros as $pos => $nome) {
        echo $pos.' - ';
        echo $nome.'<br>';
    }
    
    echo '<hr>';
    
    $frutas = ['maça','banana','abacate'];
    $frutas[4] = 'abacaxi';
    $frutas[] = 'mamão';
    
    foreach($frutas as $fruta) {
        echo $fruta.'<br>';
    }
?>