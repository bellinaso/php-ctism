<!doctype html>
<html lang="en">
    <head>
        <title>Biblioteca</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
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
                <h1>Biblioteca Virtual</h1>
            </div>
        </header>
        <main class="col-12 d-flex justify-content-center">
            <div class="fluid-container col-12 col-md-6 d-flex justify-content-center align-content-center flex-column">
                <a href="index.php" class="voltar col-2 p-2 m-1 rounded-3 text-center text-light bg-primary">
                    <img class="seta-voltar" src="imgs/seta-esquerda.png" alt="seta à esquerda" style="width: 12pt; filter: invert();">
                    Voltar
                </a>
                <h2 class="text-center">Biblioteca - Livros</h2>
                <hr>

                <?php
                    @session_start();
                    require_once 'controller/ex10SessionController.php';

                    $livros = $_SESSION['livros'];

                    echo '<table class="table">';
                    echo '<tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Ano de Publicação</th>
                        </tr>';

                    $somaAnos = 0;

                    foreach($livros as $titulo => $detalhes) {
                        echo '<tr>';
                        echo '<td>'.$titulo.'</td>';
                        echo '<td>'.$detalhes['autor'].'</td>';
                        echo '<td>'.$detalhes['ano'].'</td>';
                        echo '</tr>';
                        $somaAnos += $detalhes['ano'];
                    }
                    echo '</table>';

                    $mediaAno = $somaAnos / count($livros);
                    echo '<strong>Média do ano de publicação:</strong> '.$mediaAno;

                    if($_POST) {
                        $encontrado = false;
                        $pesquisa = strtolower($_POST['pesquisa']);
    
                        foreach($livros as $titulo => $detalhes) {
                            if($pesquisa == strtolower($titulo)) {
                                $encontrado = true;
                                break;
                            }
                        }
                        if($encontrado) {
                            echo '  <div class="alert alert-dark mt-4" role="alert">
                                        Livro <strong>"'.ucfirst($pesquisa).'"</strong> encontrado!
                                        <table class="col-6 mt-3">
                                            <tr>
                                                <th>Título</th>
                                                <th>Autor</th>
                                                <th>Ano de Publicação</th>
                                            </tr>
                                            <tr>
                                                <td>'.$titulo.'</td>
                                                <td>'.$detalhes['autor'].'</td>
                                                <td>'.$detalhes['ano'].'</td>
                                            </tr>
                                        </table>
                                    </div>';
                        } else {
                            echo '<div class="alert alert-danger" role="alert">
                                    Desculpe, o livro <strong>"'.ucfirst($pesquisa).'"</strong> não foi encontrado.
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
    </body>
</html>