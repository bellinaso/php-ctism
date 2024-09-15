<?php

    // Tabela Categorias: array
    $categorias = array(
        array('id' => '1', 'nome' => 'Cosméticos'),
        array('id' => '2', 'nome' => 'Casa')
    );

    // Tabela produtos: array
    $produtos = array(
        array('id' => '1', 'nome' => 'Creme de Barbear', 'preco' => '50.00',   'categoria_id' => '1'),
        array('id' => '2', 'nome' => 'Batom',            'preco' => '30.00',   'categoria_id' => '1'),
        array('id' => '1', 'nome' => 'Abajur',           'preco' => '100.00',  'categoria_id' => '2'),
        array('id' => '2', 'nome' => 'Sofá',             'preco' => '7000.00', 'categoria_id' => '2')
    );
?>

<select name="categorias_id">
    <option selected disabled>Selecione uma categoria</option>
    <?php
        foreach($categorias as $key => $value) {
            // echo '<option value='.$value["id"].'">'.$value["nome"].'</option>';

            echo "<option value='{$value['id']}'>{$value['nome']}</option>";
        }
    ?>
</select>