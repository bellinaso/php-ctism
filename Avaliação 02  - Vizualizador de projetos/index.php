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
        <main class="container d-flex flex-column align-items-center">
            <h1>Entrar</h1>
            <?php
                if(isset($_REQUEST['cod'])) {
                    switch($_REQUEST['cod']) {
                        case 409:
                            echo '<div class="alert alert-danger"><strong class="text-danger"> Algo deu errado!</strong><span class="text-danger"> Usuário ou senha incorreta!</span></div>';
                            break;
                        case 405:
                            echo '<div class="alert alert-danger"><strong class="text-danger"> Algo deu errado!</strong><span class="text-danger"> Realize login!</span></div>';
                            break;
                    }
                }
            ?>
            <form action="/src/controller/loginController.php" method="post" class="col-md-8 col-6 bg-light p-3 border rounded-3">
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Insira seu email aqui" class="form-control">
                </div>
                <div class="mb-3 mt-3">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" name="password" id="password" placeholder="Insira sua senha aqui" class="form-control">
                </div>
                <div class="mb-3 mt-3 d-flex justify-content-center">
                    <input type="submit" value="Entrar" class="col-md-6 btn btn-primary">
                </div>
            </form>
        </main>
        <footer>
            <?php
                require_once 'src/controller/usersController.php';

                $users = usersLoadAll();
                
                echo '<table class="table">';
                echo '<tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                </tr>';
                foreach($users as $key => $value) {
                    echo '<tr>';
                        echo '<th>'.$value['id'].'</th>';
                        echo '<td>'.$value['name'].'</td>';
                        echo '<td>'.$value['email'].'</td>';
                        echo '<td>'.$value['password'].'</td>';
                    echo '</tr>';
                }
                echo '</table>';
            ?>
        </footer>
    </body>
</html>
