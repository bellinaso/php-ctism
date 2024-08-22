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
            <div class="fluid-container col-10 col-md-6 d-flex justify-content-center align-content-center flex-column">
                <a href="index.php" class="voltar col-2 p-2 m-1 rounded-3 text-center text-light bg-primary">
                    <img class="seta-voltar" src="imgs/seta-esquerda.png" alt="seta à esquerda" style="width: 12pt; filter: invert();">
                    Voltar
                </a>
                <h2 class="text-center">Exercício 8 - Pesquisa de pessoa</h2>
                <p>- Crie um array associativo onde cada chave é o nome de uma pessoa e o valor é outro array associativo contendo "telefone" e "email". Realize as seguintes operações:

                    <ul>
                        <li>
                            Exiba a lista de contatos com seus respectivos telefones e emails.
                        </li>
                        <li>
                            Permita que o usuário insira um nome e exiba os detalhes do contato (telefone e email).
                        </li>
                        <li>
                            Permita que o usuário adicione um novo contato (nome, telefone, email) ao array e exiba a lista atualizada.
                        </li>
                    </ul>

                </p>

                <hr>

                <?php
                    @session_start();
                    require_once 'controller/ex08SessionController.php';

                    $pessoas = $_SESSION['pessoas'];

                    echo '<table>';
                    echo '<tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Email</th>
                        </tr>';

                    foreach($pessoas as $pessoa => $info) {
                        echo '<tr>';
                        echo '<td>'.$pessoa.'</td>';
                        echo '<td>'.$info['telefone'].'</td>';
                        echo '<td>'.$info['email'].'</td>';
                        echo '</tr>';
                    }
                    echo '</table>';

                    if($_POST) {
                        $encontrado = false;
                        $pesquisa = strtolower($_POST['pesquisa']);
    
                        foreach($pessoas as $pessoa => $info) {
                            if($pesquisa == strtolower($pessoa)) {
                                $encontrado = true;
                                break;
                            }
                        }
                        if($encontrado) {
                            echo '  <div class="alert alert-success" role="alert">
                                        Usuário <strong>"'.ucfirst($pesquisa).'"</strong> encontrado!.
                                        <table class="col-6 mt-3">
                                            <tr>
                                                <th>Nome</th>
                                                <th>Telefone</th>
                                                <th>Email</th>
                                            </tr>
                                            <tr>
                                                <td>'.$pessoa.'</td>
                                                <td>'.$info['telefone'].'</td>
                                                <td>'.$info['email'].'</td>
                                            </tr>
                                        </table>
                                    </div>';
                                }
                        else {
                            echo '<div class="alert alert-danger" role="alert">
                                    Desculpe, o usuário <strong>"'.ucfirst($pesquisa).'"</strong> não foi encontrado.
                                    </div>';
                        }
                    }

                ?>
                <h3>Realizar pesquisa:</h3>
                <form action="" method="post" class="col-4 mb-4 form-inline input-group">
                    <input type="search" name="pesquisa" placeholder="Pesquisar" class="form-control">
                    <input type="submit" value="Pesquisar" class="btn btn-outline-dark">
                </form>

                <h3>Inserir pessoas</h3>

                <form action="controller/ex08SavePersonController.php" method="post" class="col-6 d-flex flex-column">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" placeholder="Insira seu nome" class="form-control mb-2" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="text" name="telefone" placeholder="Insira seu telefone" class="form-control mb-2" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" placeholder="Insira seu email" class="form-control mb-2" required>
                    </div>
                    <input type="submit" value="Adicionar" class="btn btn-outline-dark col-6 align-self-center">
                </form>
            </div>
        </main>
        <footer class="mt-5">
            
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
