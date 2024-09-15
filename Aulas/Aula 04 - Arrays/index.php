<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav class="nav justify-content-center">
                <a href="arrayComum.php" class="nav-link active">Array comum</a>
                <a href="arrayAssociativo.php" class="nav-link">Array Associativo</a>
                <a href="arrayMultidimensional.php" class="nav-link">Array Multidimensional</a>
                <a href="arrayMultidimensionalAssociativo.php" class="nav-link">Array Multidimensional Associativo</a>
                <a href="#" class="nav-link disabled">Disabled link</a>
            </nav>    
        </header>
        <main class="container">
            <form action="/src/controller/usuarioController.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Insira seu email"
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="" placeholder="Insira sua senha"/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>
        </main>
        <footer>


        </footer>
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
