<?php
    function usersLoadAll() {
        $users = array(
            array(
                'id' => '1',
                'name' => 'Fulano',
                'email' => 'fulano777@gmail.com',
                'password' => 'senhaforte'
            ),
            array(
                'id' => '2',
                'name' => 'Beltrano',
                'email' => 'beltrano@outlook.com',
                'password' => 'passdobeltra'
            ),
            array(
                'id' => '3',
                'name' => 'Ciclano',
                'email' => 'ciclanoclano@gmail.com',
                'password' => 'troqueiooleodocorolla'
            ),
            array(
                'id' => '4',
                'name' => 'Moicano',
                'email' => 'moicanodorezende@outlook.com',
                'password' => 'eutenhomoicano'
            ),
            array(
                'id' => '5',
                'name' => 'Peidano',
                'email' => 'peidanos@outlook.com',
                'password' => 'senhadificil'
            )
        );

        return $users;
    }

    function userLoadByID($id) {
        $users = usersLoadAll();
        
        foreach($users as $key => $value) {
            if($id == $value['id']) {
                $result = $value['name'];
                break;
            }
        }
        return $result;
    }
?>