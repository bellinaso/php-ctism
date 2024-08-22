<?php
    @session_start();
    if($_POST) {
        if (isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['email'])) {
            $_SESSION['pessoas'][$_POST['nome']] = array(
                'telefone' => $_POST['telefone'],
                'email' => $_POST['email']
            );
        }
    }
    header('location:../ex08-contatos.php');
?>