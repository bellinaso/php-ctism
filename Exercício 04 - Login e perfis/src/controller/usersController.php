<?php
    function loadUsers() {
        $users = array(
        array(
            'id' => 1,
            'name' => 'Fulano',
            'email' => 'fulanoradical@gmail.com',
            'password' => '1234',
            'role' => 'Admin'
        ),
        array(
            'id' => 2,
            'name' => 'Ciclano',
            'email' => 'ciclanojoga@gmail.com',
            'password' => 'abcd',
            'role' => 'Usuário'
        ),
        array(
            'id' => 3,
            'name' => 'Beltrano',
            'email' => 'beltranofera@gmail.com',
            'password' => '1234',
            'role' => 'Moderador'
        ),
        array(
            'id' => 4,
            'name' => 'Moicano',
            'email' => 'moicanomassa@gmail.com',
            'password' => 'abcd',
            'role' => 'Usuário'
        )
    );

    return $users;
    }
?>