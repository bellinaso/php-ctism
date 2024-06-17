<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        img {
            filter: drop-shadow(0 0 2rem #fff);
        }

        .form-box {
            box-shadow: 0 0 5px 0;
            background: rgba(0, 0, 0, 0);
            backdrop-filter: blur(15px);
        }
    </style>
</head>
<body
style="
color: #fff;
background: linear-gradient(0deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%), url(imgs/quadra-de-beach-tennis2.png);
background-repeat: no-repeat;
background-position: 10%;
background-size: cover;
min-height: 100vh;">
    <main class="fluid-container d-flex flex-column justify-content-around align-items-center">
        <img src="imgs/arena_logo.fw-min.png" alt="logo" class="align-self-center p-5"
        style="
            width: 300px;
            filter: drop-shadow(0 0 5rem #fff);">
        <div class="col-md-8 col-lg-6 p-3 mb-5 rounded-4 form-box">
            <div class="d-flex flex-row">
                <div class="align-self-start">
                    <a href="index.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
                        </svg>
                    </a>
                </div>
                <div class="align-self-center">
                    <h2 class="text-center">Cadastro</h2>
                </div>
            </div>

            <form action="/controller/cadastroController.php" method="post">
                <?php
                    if(isset($_REQUEST) && @$_REQUEST['cod'] == '400') {
                        echo '<div class="alert alert-danger"><strong class="text-danger"> Algo deu errado!</strong><span class="text-danger"> Preencha todas as informações corretamente.</span></div>';
                    }
                    else if(isset($_REQUEST) && @$_REQUEST['cod'] == '403') {
                        echo '<div class="alert alert-danger"><strong class="text-danger"> Algo deu errado!</strong><span class="text-danger"> As senhas não coincidem.</span></div>';
                    }
                ?>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="name" placeholder="Insira seu nome" name="name" required>
                </div>
                
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Insira seu email">
                </div>

                <div class="mb-3 mt-3">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" class="form-control" id="cpf" placeholder="Insira seu nome" name="cpf" required>
                </div>

                <div class="mb-3 mt-3">
                    <label for="tel" class="form-label">Telefone:</label>
                    <input type="tel" class="form-control" name="tel" id="tel" placeholder="Insira seu telefone">
                </div>

                <div class="mb-3 mt-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Crie uma senha">
                </div>

                <div class="mb-3 mt-3">
                    <label for="password-confirm" class="form-label">Confirmar Senha</label>
                    <input type="password-confirm" class="form-control" name="passwordConfirm" id="password-confirm" placeholder="Confirme sua senha">
                </div>

                <div class="mb-3 mt-3 d-flex justify-content-center">
                    <input type="submit" value="Realizar cadastro" class="col-md-6 btn btn-success">
                </div>
            </form>
        </div>
    </main>
</body>
</html>