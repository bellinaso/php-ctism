<?php
    if($_POST) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $cpf = $_POST['cpf'];
        $password = $_POST['password'];
        $passwordConfirm = $_POST['passwordConfirm'];

        if($name == '' || $email == '' || $cpf == '' || $tel == '' || $password == '' || $passwordConfirm == '') {
            header('location:/cadastro.php?cod=400');
        }
        else if ($password != $passwordConfirm) {
            header('location:/cadastro.php?cod=403');
        }
        else {
            header('location:/locacao.php');
        }

    }
?>