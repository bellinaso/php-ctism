<?php
    function loadRoles() {
        $roles = array(
        array(
        'id' => 1,
        'name' => 'Admin',
        'description' => 'Perfil com acesso completo ao sistema.'
        ),
        array(
        'id' => 2,
        'name' => 'Usuário',
        'description' => 'Perfil com acesso restrito.'
        ),
        array(
        'id' => 3,
        'name' => 'Moderador',
        'description' => 'Perfil com permissões de moderação.'
        )
        );
    
        return $roles;
    }
?>