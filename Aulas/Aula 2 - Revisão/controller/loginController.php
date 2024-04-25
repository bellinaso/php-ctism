<?php
    if($_POST) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($email == 'a@a' && $senha == '123') {
            //Cria a sessão
            session_start();
            $_SESSION["login"] = $email;

            header('location:../home.php');
        }
        else {
            header('location:../index.php?cod=171');
        }
    }
?>