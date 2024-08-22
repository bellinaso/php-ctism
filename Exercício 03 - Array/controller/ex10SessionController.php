<?php
    @session_start();
    
    if (!isset($_SESSION['livros'])) {
        $_SESSION['livros'] = array(
            '1984' => array(
                'autor' => 'George Orwell',
                'ano' => 1949
            ),
            'O Senhor dos Anéis' => array(
                'autor' => 'J.R.R. Tolkien',
                'ano' => 1954
            ),
            'Dom Casmurro' => array(
                'autor' => 'Machado de Assis',
                'ano' => 1899
            ),
            'Moby Dick' => array(
                'autor' => 'Herman Melville',
                'ano' => 1851
            ),
        );
    }
?>