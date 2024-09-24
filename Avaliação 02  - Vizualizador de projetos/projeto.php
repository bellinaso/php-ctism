<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
            <link rel="stylesheet" href="/src/style/bootstrap.min.css">
            <link rel="stylesheet" href="/src/style/style.css">
            <script src="/src/script/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <main>
            <?php
                require_once 'src/controller/authenticationController.php';
                require_once 'src/controller/projectsController.php';
                require_once 'src/controller/questsController.php';
                require_once 'src/controller/usersController.php';

                $projects = projectsLoadALl();
                $quests = questsLoadALl();
            ?>
            <a href="\projetos.php">Voltar</a>
            <h1>Projeto - <?= $projects[$_REQUEST['proj']]['name'] ?></h1>
            <div>
                <?php       
                    echo '<table class="table">';
                        echo '<tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Status</th>
                            <th>Usuário</th>
                        </tr>';
                    foreach($quests as $key => $value) {
                        if($value['project_id'] == $projects[$_REQUEST['proj']]['id']) {
                            echo '<tr>';
                                echo '<th>#'.$value['id'].'</th>';
                                echo '<td>'.$value['name'].'</td>';
                                echo '<td>'.$value['description'].'</td>';
                                echo '<td>'.$value['status'].'</td>';
                                echo '<td>'.userLoadByID($value['user']).'</td>';
                                echo '</tr>';
                        }
                    }
                ?>
            </div>
        </main>
    </body>
</html>
