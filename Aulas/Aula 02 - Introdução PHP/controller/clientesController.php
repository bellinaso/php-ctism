<?php

    if($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $nascimento = $_POST['nascimento'];
        $senha = $_POST['senha'];
        $senhaConfirm = $_POST['senhaConfirm'];

        // Validação de email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('location:../cadastroclientes.php?cod=173');
        }
        else {
            // Validação de senha
            if($senha == $senhaConfirm) {
                // Usuario cadastrado
                header('location:../cadastroclientes.php?cod=172');
            }
            else {
                header('location:../cadastroclientes.php?cod=171');
            }
        }
    }
    else {
        header('location:../cadastroclientes.php');
    }

?>