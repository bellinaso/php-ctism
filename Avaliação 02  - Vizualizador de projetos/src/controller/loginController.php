<?php
    if($_POST) {
        require_once './usersController.php';

        $users = usersLoadAll();

        $email = $_POST['email'];
        $password = $_POST['password'];

        foreach($users as $key => $value) {
            if($value['email'] == $email && $value['password'] == $password) {
                @session_start();
                $_SESSION['login'] = array(
                                        'id' => $value['id'],
                                        'email' => $email,
                                        'name' => $value['name']
                                    );
                header('location:\projetos.php');
                exit();
            }
        }
        header('location:\index.php?cod=409');
    }
?>