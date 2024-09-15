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

            if(isset($_SESSION['userRole'])) {
                header('location:\selectedRole.php');
            }
        ?>
        <main class="container d-flex flex-column align-items-center">
            <h1>Cargos</h1>
            <ul class="d-flex flex-row list-unstyled gap-4">
                <?php
                    require_once './src/controller/authenticationController.php';
                    require_once './src/controller/rolesController.php';
                    
                    $roles = loadRoles();
                    
                    foreach($roles as $key => $value) {
                ?>

                    <li>
                        <a href="selectedRole.php?id=<?= $value['id'] ?>">
                            <?= $value['name'] ?>
                        </a>
                    </li>
                <?php
                    }
                ?>
            </ul>
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
