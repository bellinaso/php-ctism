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
            <h1>
                Bem vindo,
                <strong>
                    <?php
                        @session_start();
                        echo $_SESSION['login']['name'];
                    ?>
                </strong>
                !
            </h1>
            <a href="\src/controller/logoutController.php" class="btn btn-danger">Logout</a>
            <h1>Projetos</h1>
            <div>
                <?php
                    require_once 'src/controller/authenticationController.php';
                    require_once 'src/controller/projectsController.php';

                    $projects = projectsLoadALl();
                    
                    echo '<table class="table col-md-6 col-8">';
                    echo '<tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Status</th>
                    </tr>';
                    foreach($projects as $key => $value) {
                        echo '<tr>';
                            echo '<th>#'.$value['id'].'</th>';
                            echo '<td>'.'<a href="projeto.php?proj='.($value['id']-1).'">'.$value['name'].'</a>'.'</td>';
                            echo '<td>'.$value['status'].'</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                ?>
            </div>
            <h1>Tarefas</h1>
            <div>
                <?php
                    require_once 'src/controller/questsController.php';
                    require_once 'src/controller/usersController.php';

                    $quests = questsLoadALl();
                    echo '<table class="table">';
                    echo '<tr>
                    <th>ID</th>
                    <th>Projeto</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Usuário</th>
                    </tr>';
                    foreach($quests as $key => $value) {
                        echo '<tr>';
                        echo '<th>#'.$value['id'].'</th>';
                        echo '<th>'.'<a href="projeto.php?proj='.($value['project_id']-1).'">#'.$value['project_id'].'</a>'.'</th>';
                        echo '<td>'.$value['name'].'</td>';
                        echo '<td>'.$value['description'].'</td>';
                        echo '<td>'.$value['status'].'</td>';
                        echo '<td>'.userLoadByID($value['user']).'</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                ?>
            </div>
        </main>
    </body>
</html>
