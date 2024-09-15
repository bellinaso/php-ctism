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
            
        </header>
        <main class="container">
            <?php
                // require_once __DIR__.'./src/controller/produtosController.php'; // Diretório absoluto + diretório relativo
                require_once './src/controller/authenticationController.php'; // Diretório relativo
                require_once './src/controller/produtosController.php';
                require_once './src/controller/categoriasController.php';
                $produtosList = loadAll();
            ?>
            <form method="post" action="./src/controller/produtosController.php">
                <div class="mb-3">
                    <label for="" class="form-label">Pesquisar</label>
                    <input type="text" class="mt-1 form-control" name="nome_produto" id="" placeholder="Pesquisar produto"/>
                    <button type="submit" class="mt-1 btn btn-primary">Enviar</button>
                    
                </div>
                
            </form>
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($produtosList as $key => $value) {
                                echo '<tr>';
                                echo '<td>'.$value['id'].'</td>';
                                echo '<td>'.$value['nome'].'</td>';
                                echo '<td>'.$value['preco'].'</td>';
                                echo '<td>'.categoryByID($value['categoria_id']).'</td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            
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
