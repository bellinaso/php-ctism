<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saúde Beach Tênis</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        p {
            text-align: justify;
        }
        
        a {
            text-decoration: none;
        }

        strong {
            transition: all .35s ease-in-out;
        }
        
        strong:hover {
            color: #edf8f8;
        }
    </style>
</head>
<body>
    <header class="container-fluid p-0 mb-5">
        <div class="w-100 d-flex flex-column shadow"
        style="
        background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.4) 100%), url(imgs/header\ background.jpg);
        background-repeat: no-repeat;
        background-position: 10%;
        background-size: cover;">

            <div class="d-flex flex-row justify-content-center align-items-center align-self-end bg-dark text-light rounded-bottom-4 p-2">
                <?php
                @session_start();
                if (!isset($_SESSION['login'])) {
                    echo '
                    <img src="imgs/person.svg" alt="person icon" width="32rem">
                    <span>
                        Faça <a href="login.php" class="text-light"><strong>LOGIN</strong></a> ou <br>
                        realize seu <a href="cadastro.php" class="text-light"><strong>CADASTRO</strong></a>
                    </span>';
                }
                else {
                    echo '
                    <span class="p-1">
                        <a href="locacao.php" class="text-light"><strong>LOCAÇÃO</strong></a> de quadras
                    </span>';
                }
                ?>
            </div>

            <img src="imgs/arena_logo.fw-min.png" alt="logo" class="col-lg-3 col-md-5 col-sm-7 align-self-center p-5">
        </div>
    </header>
    <main>
        <div class="w-100 d-flex flex-column align-items-center">
            <h1 class="">Bem-vindo ao Saúde Beach Arena!</h1>

                <p class="col-lg-6 col-md-8 col-sm-10 col-10">Descubra o seu novo destino para esportes de raquete em Santa Maria - RS. No Saúde Beach Arena, oferecemos uma experiência única para entusiastas de padel, pickleball e beach tênis. Nossas modernas instalações e quadras bem cuidadas são o cenário perfeito para você aprimorar suas habilidades, competir ou simplesmente se divertir com amigos e familiares.</p>
    
                <p class="col-lg-6 col-md-8 col-sm-10 col-10">Com uma localização privilegiada e um ambiente acolhedor, nosso clube é ideal para jogadores de todos os níveis, desde iniciantes até profissionais. Além de proporcionar um espaço para jogar, também promovemos uma comunidade vibrante de apaixonados por esportes de raquete.</p>
    
                <p class="col-lg-6 col-md-8 col-sm-10 col-10">Explore nossas opções de aluguel de quadras, participe de nossos eventos e torneios, ou junte-se a uma de nossas aulas e clínicas ministradas por instrutores experientes. No Saúde Beach Arena, estamos dedicados a oferecer uma experiência excepcional que promove saúde, bem-estar e diversão através do esporte.</p>
    
                <p class="col-lg-6 col-md-8 col-sm-10 col-10">Venha fazer parte da nossa família Saúde Beach Arena. O jogo está só começando!</p>
        </div>
    </main>
</body>
</html>