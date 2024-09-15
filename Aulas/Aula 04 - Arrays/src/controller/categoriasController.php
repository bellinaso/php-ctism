<?php
    if($_POST) {

    }

    function categoryByID($id) {
        // Tabela produtos
        $categorias = array(
            array('id' => '1', 'nome' => 'Cosméticos'),
            array('id' => '2', 'nome' => 'Casa',)
            );

        foreach($categorias as $key => $value) {
            if($id == $value['id']) {
                $result['id'] = $value['id'];
                $result['nome'] = $value['nome'];
                break;
            }
        }
        return $result['nome'];
    }
?>