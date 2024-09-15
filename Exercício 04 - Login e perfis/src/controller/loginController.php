<?php
    if($_POST) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = userLogin($login, $password);
        
        if(count($user) > 0) {
            @session_start();

            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];

            header('location:\roles.php');
        }
        else {
            header('location:\index.php?cod=405');
        }
    }


    function userLogin($login, $password) {
        require_once './usersController.php';
        $users = loadUsers();

        $user = array();

        foreach($users as $key => $value) {
            if($value['email'] == $login && $value['password'] == $password) {
                $user['id'] = $value['id'];
                $user['name'] = $value['name'];
                $user['email'] = $value['email'];
            }
        }
        return $user;
    }
?>