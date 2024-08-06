<?php
    $carro = [
        'Marca' => 'Ford',
        'Modelo' => 'Ka',
        'Ano' => 1995
    ];

    $carro['Marca'] = 'Chevrolet';
    $carro['Modelo'] = 'Corsa';
    $carro['Ano'] = 1994;

    foreach($carro as $key => $value) {
        echo $key.': ';
        echo $value.'<br>';
    }
?>