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
                <h2 class="text-center">Exercício 9 - Notas do aluno</h2>
                <p>- Crie um array associativo onde cada chave é o nome de um aluno e o valor é outro array contendo três notas (números). Em seguida:
                    <ul>
                        <li>
                            Exiba a média de cada aluno.
                        </li>
                        <li>
                            Determine e exiba o aluno com a maior média e o aluno com a menor média.
                        </li>
                        <li>
                            Permita que o usuário insira o nome de um aluno para ver suas notas e média.
                        </li>
                    </ul>
                </p>

                <hr>

                <?php
                    @session_start();
                    require_once 'controller/ex09SessionController.php';

                    $alunos = $_SESSION['alunos'];

                    echo '<table>';
                    echo '<tr>
                            <th>Aluno</th>
                            <th>Nota 1</th>
                            <th>Nota 2</th>
                            <th>Nota 3</th>
                            <th>Média</th>
                        </tr>';

                    $maiorMedia = -1;  // Inicializa com um valor baixo
                    $menorMedia = 11;  // Inicializa com um valor alto
                    $alunoMaiorMedia = '';
                    $alunoMenorMedia = '';

                    foreach($alunos as $aluno => $nota) {
                        $media = array_sum($nota)/3;
                        echo '<tr>';
                        echo '<td>'.$aluno.'</td>';
                        echo '<td>'.$nota['nota1'].'</td>';
                        echo '<td>'.$nota['nota2'].'</td>';
                        echo '<td>'.$nota['nota3'].'</td>';
                        echo '<td>'.$media.'</td>';
                        echo '</tr>';

                        if ($media > $maiorMedia) {
                            $maiorMedia = $media;
                            $alunoMaiorMedia = $aluno;
                        }
                        
                        // Verifica se a média atual é menor que a menor média encontrada
                        if ($media < $menorMedia) {
                            $menorMedia = $media;
                            $alunoMenorMedia = $aluno;
                        }
                    }
                    echo '</table>';

                    echo '<strong class="mt-4">Maior e menor nota</strong>
                            <table class="col-6">
                                <tr>
                                    <th>Aluno</th>
                                    <th>Média</th>
                                </tr>
                                <tr>
                                    <td>'.$alunoMaiorMedia.'</td>
                                    <td>'.$maiorMedia.'</td>
                                </tr>
                                <tr>
                                    <td>'.$alunoMenorMedia.'</td>
                                    <td>'.$menorMedia.'</td>
                                </tr>
                            </table>';

                    if($_POST) {
                        $encontrado = false;
                        $pesquisa = strtolower($_POST['pesquisa']);
    
                        foreach($alunos as $aluno => $nota) {
                            if($pesquisa == strtolower($aluno)) {
                                $encontrado = true;
                                break;
                            }
                        }
                        if($encontrado) {
                            echo '  <div class="alert alert-dark mt-4" role="alert">
                                        Aluno <strong>"'.ucfirst($pesquisa).'"</strong> encontrado!
                                        <table class="col-6 mt-3">
                                            <tr>
                                                <th>Aluno</th>
                                                <th>Nota 1</th>
                                                <th>Nota 2</th>
                                                <th>Nota 3</th>
                                            </tr>
                                            <tr>
                                                <td>'.$aluno.'</td>
                                                <td>'.$nota['nota1'].'</td>
                                                <td>'.$nota['nota2'].'</td>
                                                <td>'.$nota['nota3'].'</td>
                                            </tr>
                                        </table>
                                    </div>';
                                }
                        else {
                            echo '<div class="alert alert-danger" role="alert">
                                    Desculpe, o aluno <strong>"'.ucfirst($pesquisa).'"</strong> não foi encontrado.
                                    </div>';
                        }
                    }
                ?>
                <h3>Realizar pesquisa:</h3>
                <form action="" method="post" class="col-4 mb-4 form-inline input-group">
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
