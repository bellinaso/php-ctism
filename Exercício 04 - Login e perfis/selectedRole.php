<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <body>
        <main class="container d-flex flex-column align-items-center">
            <h1>Cargo Selecionado</h1>
            <?php
                @session_start();
                require_once './src/controller/authenticationController.php';
                require_once './src/controller/rolesController.php';

                if (isset($_GET['id'])) {
                    $perfilId = ($_GET['id']);

                    $_SESSION['userRole'] = $perfilId;
                }

                switch ($_SESSION['userRole']) {
                    case 1: // Admin
                        echo '<h1>Bem-vindo, Admin!</h1>';
                        echo '<p>Você tem acesso completo ao sistema.</p>';
                        break;
                    case 2: // Usuário
                        echo '<h1>Bem-vindo, Usuário!</h1>';
                        echo '<p>Você tem acesso restrito.</p>';
                        break;
                    case 3: // Moderador
                        echo '<h1>Bem-vindo, Moderador!</h1>';
                        echo '<p>Você tem permissões de moderação.</p>';
                        break;
                    default:
                        echo '<h1>Bem-vindo!</h1>';
                        echo '<p>Por favor, selecione um perfil.</p>';
                        break;
                }
            ?>
            <a href="/src/controller/logoutController.php" class="btn btn-danger">LogOut</a>
        </main>





        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
