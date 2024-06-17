<?php
    if($_POST) {
        $cpf = $_POST['cpf'];
        $password = $_POST['password'];

        if($cpf == '' || $password == '') {
            header('location:/login.php?cod=400');
        }
        else if ($cpf != '12345' || $password != '123') {
            header('location:/login.php?cod=401');
        }
        else {
            header('location:/locacao.php');
        }
    }
?>