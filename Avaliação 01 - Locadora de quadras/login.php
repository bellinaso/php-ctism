<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/login-register-style.css">

</head>
<body>
    <main class="fluid-container d-flex flex-column justify-content-around align-items-center">
        <img src="imgs/arena_logo.fw-min.png" alt="logo" class="align-self-center p-5">

        <div class="col-lg-5 col-md-8 col-sm-10 col-10 p-3 mb-5 rounded-4 form-box">
            <div class="align-self-start d-flex">
                <a href="index.php" class="text-light go-back-button">
                    <svg fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                        width="1.3rem" height="1.3rem" viewBox="0 0 30.725 30.725"
                        xml:space="preserve">
                        <g>
                            <path d="M24.078,26.457c0.977,0.978,0.977,2.559,0,3.536c-0.488,0.488-1.128,0.731-1.77,0.731c-0.639,0-1.278-0.243-1.768-0.731
                                L5.914,15.362l14.629-14.63c0.977-0.977,2.559-0.976,3.535,0c0.977,0.977,0.977,2.56,0,3.536L12.984,15.362L24.078,26.457z"/>
                        </g>
                    </svg>
                    <strong>Voltar</strong>
                </a>
            </div>
            <div class="align-self-center">
                <h2 class="text-center">Entrar</h2>
            </div>

            <form action="/controller/loginController.php" method="post">
                <?php
                    if(isset($_REQUEST) && @$_REQUEST['cod'] == '401') {
                        echo '<div class="alert alert-danger"><strong class="text-danger"> Algo deu errado!</strong><span class="text-danger"> Usuário ou senha incorreta!</span></div>';
                    }
                ?>
                <div class="mb-3 mt-3">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Insira seu CPF">
                </div>

                <div class="mb-3 mt-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Insira sua senha">
                </div>

                <div class="mb-3 mt-3 d-flex justify-content-center">
                    <input type="submit" value="Entrar" class="col-md-6 btn btn-success">
                </div>
            </form>
        </div>
    </main>
</body>
</html>