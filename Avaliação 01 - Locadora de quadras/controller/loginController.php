<?php
    if($_POST) {
        $cpf = $_POST['cpf'];
        $password = $_POST['password'];

        if($cpf == '12345' && $password == '123') {
            @session_start();
            $_SESSION['login'] = $cpf;
            header('location:/locacao.php');
        }
        else if ($cpf != '' || $password != '') {
            header('location:/login.php?cod=401');
        }
    }
?>