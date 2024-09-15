<?php
    if($_POST) {
        $nome = $_POST['nome_produto'];

        if(empty($nome)) {
            header('location:\listaProdutos.php?cod=empty');
        }
        else {
            header('location:\listaProdutos.php?cod='.$nome);
        }
    }

    function loadByName($nome) {
        $produtos = loadAll();

        foreach($produtos as $key => $value) {
            if($nome == $value) {
                $result['id'] = $value['id'];
                $result['nome'] = $value['nome'];
                $result['preco'] = $value['preco'];
                $result['categoria_id'] = $value['categoria_id'];
            }
        }
    }

    function loadAll() {
        // Tabela produtos
        $produtos = array(
            array('id' => '1', 'nome' => 'Creme de Barbear', 'preco' => '50.00',   'categoria_id' => '1'),
            array('id' => '2', 'nome' => 'Batom',            'preco' => '30.00',   'categoria_id' => '1'),
            array('id' => '1', 'nome' => 'Abajur',           'preco' => '100.00',  'categoria_id' => '2'),
            array('id' => '2', 'nome' => 'Sofá',             'preco' => '7000.00', 'categoria_id' => '2')
        );

        return $produtos;
    }
?>