<?php

    echo '<h1>Array comum</h1><br>';

    // $carros = [0=>'Corsa', 1=>'Gol', 2=>'Fit'];
    $carros = ['Corsa', 'Gol', 'Fit'];

    for($i = 0; $i < count($carros); $i++) {
        echo $carros[$i].'<br>';
    }

    echo '<hr>';
    
    echo '<h1>Array com foreach</h1><br>';

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

    echo '<hr>';

    echo '<h1>Função Sort</h1><br>';

    $frutas = array('Limão','Laranja','Banana','Melancia');

    // Ordena de forma crescente a array
    sort($frutas);

    foreach($frutas as $fruta) {
        echo $fruta.'<br>';
    }

    echo '<hr>';

    echo '<h1>Função Rsort</h1><br>';

    $frutas = array('Limão','Laranja','Banana','Melancia');

    // Ordena de forma decrescente a array
    rsort($frutas);

    foreach($frutas as $fruta) {
        echo $fruta.'<br>';
    }
?>

