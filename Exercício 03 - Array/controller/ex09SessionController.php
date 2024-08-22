<?php
    @session_start();
    
    if (!isset($_SESSION['alunos'])) {
        $_SESSION['alunos'] = array(
            'Ana' => array(
                'nota1' => 7.5,
                'nota2' => 8.0,
                'nota3' => 9.2
            ),
            'Bruno' => array(
                'nota1' => 6.8,
                'nota2' => 7.9,
                'nota3' => 8.4
            ),
            'Carla' => array(
                'nota1' => 9.0,
                'nota2' => 9.3,
                'nota3' => 8.7
            ),
            'Diego' => array(
                'nota1' => 5.5,
                'nota2' => 6.7,
                'nota3' => 7.2
            ),
        );
    }
?>