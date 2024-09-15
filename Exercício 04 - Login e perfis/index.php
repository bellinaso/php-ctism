<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <body>
        <?php
            @session_start();

            if(isset($_SESSION['id'])) {
                header('location:\roles.php');
            }
        ?>
        <main class="container d-flex flex-column align-items-center">
            <h2>Entrar</h2>
            <form action="\src/controller/loginController.php" method="post" class="w-50">
                <div class="mb-3">
                    <label for="login" class="form-label">Email</label>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Insira o seu email"/>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Insira a sua senha"/>
                </div>
                <?php
                    if($_REQUEST && isset($_REQUEST['cod'])) {
                        switch($_REQUEST['cod']) {
                            case 405:
                                echo '<p class="text-danger">Email ou senha incorretos! Tente novamente.</p>';
                        }
                    }
                ?>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
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
