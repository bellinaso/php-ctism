<?php
    function questsLoadALl() {
        $quests = array(
            array(
                'id' => '1',
                'project_id' => '1',
                'name' => 'Correção',
                'description' => 'Corrigir sombra',
                'status' => 'Em andamento',
                'user' => '4'
            ),
            array(
                'id' => '2',
                'project_id' => '2',
                'name' => 'Correção',
                'description' => 'Mudar unidade de medida',
                'status' => 'Em andamento',
                'user' => '1'
            ),
            array(
                'id' => '3',
                'project_id' => '3',
                'name' => 'Ideia',
                'description' => 'Adicionar sensor no óculos',
                'status' => 'Em andamento',
                'user' => '3'
            ),
            array(
                'id' => '4',
                'project_id' => '1',
                'name' => 'Correção',
                'description' => 'Diminuir velocidade',
                'status' => 'Em andamento',
                'user' => '2'
            ),
            array(
                'id' => '5',
                'project_id' => '2',
                'name' => 'Ideia',
                'description' => 'Mostrar humidade',
                'status' => 'Em andamento',
                'user' => '3'
            ),
            array(
                'id' => '6',
                'project_id' => '3',
                'name' => 'Remoção',
                'description' => 'Remover códigos inúteis',
                'status' => 'Em andamento',
                'user' => '5'
            ),
        );

        return $quests;
    }
?>