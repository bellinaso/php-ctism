<?php
    @session_start();
    
    if (!isset($_SESSION['pessoas'])) {
        $_SESSION['pessoas'] = array(
            'Fulano' => array(
                'telefone' => '+55 11 91234-5678',
                'email' => 'fulano@gmail.com'
            ),
            'Ciclano' => array(
                'telefone' => '+55 21 98765-4321',
                'email' => 'ciclaninho002@hotmail.com'
            ),
            'Beltrano' => array(
                'telefone' => '+55 31 99876-5432',
                'email' => 'beltrano@beltrame.com'
            ),
            'Moicano' => array(
                'telefone' => '+55 41 93456-7890',
                'email' => 'moicano@gmail.com'
            )
        );
    }
?>