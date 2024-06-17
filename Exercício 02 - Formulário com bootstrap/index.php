<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <link rel="stylesheet" href="/style/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=LXGW+WenKai+Mono+TC:wght@300&display=swap');

        *  {
            box-sizing: border-box;
            margin: 0;
            color: #fff;
        }

        main {
            min-height: 100vh;

            background: linear-gradient(0deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.1) 100%),
                        url("/imgs/cute-dog-with-owner-pet-shop.jpg");
            background-attachment: scroll;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        img {
            filter: drop-shadow(0 0 2rem #fff);
        }

        .form-box {
            box-shadow: 0 0 5px 0;
            background: rgba(0, 0, 0, 0);
            backdrop-filter: blur(15px);
        }

        h2 {
            font-family: "LXGW WenKai Mono TC", monospace;
        }
    </style>

</head>
<body>
    <main class="fluid-container d-flex flex-column justify-content-around align-items-center">

        <img src="/imgs/Bicho Chique_transparent.png" alt="logo" style="width: 400px;">

        <?php
            if($_POST) {
                $name = $_POST['name'];
                $tel = $_POST['tel'];
                $animal_name = $_POST['animal'];
                $services = $_POST['services'];
                $date = $_POST['date'];
                $observation = ($_POST['observation'] == '(Opcional)') ? '(Nenhuma)' : $_POST['observation'];

                if(!isset($name) || !isset($tel) || !isset($animal_name) || !isset($services) || !isset($date)) {
                    header('location:/index.php?cod=400');
                }

                echo '<script type="text/javascript">
                    document.addEventListener("DOMContentLoaded", function() {
                    var successModal = new bootstrap.Modal(document.getElementById("success-modal"));
                    successModal.show();
                });
                </script>
                
                <div class="modal fade" id="success-modal">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content p-3 rounded-4"
                        style="
                        box-shadow: 0 0 5px 0;
                        background: rgba(0, 0, 0, 0);
                        backdrop-filter: blur(15px);">

                            <div class="modal-header">
                                <h3 class="text-center text-success">Agendamento Relizado</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div ckass="modal-body">
                                <h4 class="text-center">Informações do agendamento</h4>
                                <div class="d-flex justify-content-around">
                                    <div>
                                        <h5 class="text-center">Cliente:</h5>
                                        <p><strong>Nome: </strong>'.$name.'</p>
                                        <p><strong>Telefone: </strong>'.$tel.'</p>
                                    </div>
                                    <div>
                                        <h5 class="text-center">Seu pet:</h5>
                                        <p><strong>Nome: </strong>'.$animal_name.'</p>
                                        <p><strong>Serviços: </strong>';
                                        foreach($services as $selected_services){
                                            echo '<br>'.$selected_services;
                                        }
                                        echo '</p>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="text-center">Agendamento:</h5>
                                    <p><strong>Data: </strong>'.$date.'</p>
                                    <p><strong>Observações: </strong>'.$observation.'</p>
                                </div>
                            </div>

                            <div ckass="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
                
                ';
            }
        ?>

        <div class="col-md-8 col-lg-6 p-3 mb-5 rounded-4 form-box">
            <h2 class="text-center">Formulário de ordem de serviço</h2>

            <form action="/index.php" method="post">
                <?php
                    if(isset($_REQUEST) && @$_REQUEST['cod'] == '400') {
                        echo '<div class="alert alert-danger"><strong class="text-danger"> Algo deu errado!</strong><span class="text-danger"> Preencha todas as informações corretamente.</span></div>';
                    }
                ?>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="name" placeholder="Insira seu nome" name="name" required>
                </div>

                <div class="mb-3 mt-3">
                    <label for="tel" class="form-label">Telefone:</label>
                    <input type="tel" class="form-control" id="tel" placeholder="Insira o seu telefone (xx xxxxx-xxxx)" name="tel" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
                </div>

                <div class="mb-3 mt-3">
                    <label for="animal" class="form-label">Nome do animal:</label>
                    <input type="text" class="form-control" id="animal" placeholder="Insira o nome do seu animal" name="animal" required>
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Serviços:</label>
                    <div class="mt-3 d-flex flex-row gap-3">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" value="Banho e tosa" id="option1" name="services[]">
                            <label for="option1" class="form-label">Banho e Tosa</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" value="Corte de unhas" id="option2" name="services[]">
                            <label for="option2" class="form-label">Corte de unhas</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" value="Limpeza de ouvido" id="option3" name="services[]">
                            <label for="option3" class="form-label">Limpeza de ouvido</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" value="Vacinação" id="option4" name="services[]">
                            <label for="option4" class="form-label">Vacinação</label>
                        </div>

                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label for="date" class="form-label">Data:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <div  class="mb-3 mt-3">
                <label for="comment">Observações:</label>
                <textarea class="form-control" rows="5" id="comment" name="observation">(Opcional)</textarea>
                </div>

                <div class="mb-3 mt-3 d-flex justify-content-center">
                    <input type="submit" value="Realizar Agendamento" class="col-md-6 btn btn-success">
                </div>
            </form>
        </div>
    </main>
</body>
</html>