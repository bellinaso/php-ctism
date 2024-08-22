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
        <style>
            header {
                box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.75);
            }
            a, .seta-voltar {
                transition: all ease-in-out 300ms;
                text-decoration: none;
            }
            a:hover {
                scale: 1.03;
            }
            .voltar:hover > .seta-voltar {
                transform: translateX(-0.3rem);
            }
        </style>
    </head>

    <body>
        <header>
            <div class="fluid-container text-center text-light bg-dark p-3">
                <h1>Exercícios de array</h1>
            </div>
        </header>
        <main class="col-12 d-flex justify-content-center">
            <div class="fluid-container col-12 col-md-6 d-flex justify-content-center align-content-center flex-column">
                <a href="index.php" class="voltar col-2 p-2 m-1 rounded-3 text-center text-light bg-primary">
                    <img class="seta-voltar" src="imgs/seta-esquerda.png" alt="seta à esquerda" style="width: 12pt; filter: invert();">
                    Voltar
                </a>
                <h2 class="text-center">Exercício 4 - String encontrada</h2>
                <p>- Crie um array unidimensional com 10 números inteiros em ordem aleatória. Ordene o array em ordem crescente e exiba o resultado.</p>

                <hr>

                <?php
                    $palavras = array("bellinaso","laele","python","gato","corolla","caminhão");

                    echo '<p>Pesquise alguma palavra do vetor: ';
                    foreach($palavras as $value) {
                        echo $value.', ';
                    }
                    if($_POST) {
                        $encontrado = false;
                        $pesquisa = $_POST['pesquisa'];

                        foreach($palavras as $value) {
                            if($pesquisa == $value) {
                                $encontrado = true;
                                break;
                            }
                        }
                        if($encontrado) {
                            echo '<div class="alert alert-success" role="alert">
                                    <strong>A string foi encontrada!</strong>
                                    </div>';
                                }
                        else {
                            echo '<div class="alert alert-danger" role="alert">
                                    <strong>A string não foi encontrada :/</strong>
                                    </div>';
                        }
                    }
                ?>
                <form action="" method="post" class="col-4 form-inline input-group">
                    <input type="search" name="pesquisa" placeholder="Pesquisar" class="form-control">
                    <input type="submit" value="Pesquisar" class="btn btn-outline-dark">
                </form>
            </div>
        </main>
        <footer>
            
        </footer>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
    </body>
</html>
