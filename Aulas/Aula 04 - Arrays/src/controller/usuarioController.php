<?php
    //region inputs
    if($_POST) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = usersLogin($email, $password);

        if(count($user) > 0) {
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            header('location:\listaProdutos.php');
        }
        else {
            header('location:\index.php?cod=error');
        }
    }
    //endregion

    function usersLoadAll() {
        $usuarios = array(
            array('id' => '1',
                'name' => 'Miguel',
                'lastName' => 'Brazino',
                'email' => 'm@m',
                'password' => 'senha123'
            ),
            array('id' => '2',
                'name' => 'Maria',
                'lastName' => 'Joaquina',
                'email' => 'ma@m',
                'password' => 'senha456'
            ),
            array('id' => '3',
                'name' => 'João',
                'lastName' => 'Albino',
                'email' => 'j@m',
                'password' => 'senhadenovo'
            ),
            array('id' => '4',
                'name' => 'Bruna',
                'lastName' => 'Marquezine',
                'email' => 'b@m',
                'password' => 'senhalegal'
            )
        );

        return $usuarios;
    }

    function usersLogin($email, $password) {
        $result = usersLoadAll();
        $user = array();

        foreach($result as $key => $value) {
            if($email == $value['email'] && $password == $value['password']) {
                $user['id'] = $value['id'];
                $user['name'] = $value['name'];
                $user['lastName'] = $value['lastName'];
                $user['email'] = $value['email'];
                $user['password'] = $value['password'];
                break;
            }
        }
        return $user;
    }
?>