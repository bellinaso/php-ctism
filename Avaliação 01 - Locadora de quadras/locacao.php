<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locação de quadras</title>
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

        input {
            transition: all .25s ease-out !important;
        }

        input:hover {
            transform: translateX(-0.2rem);
            background-color: #edf8f8;
        }

        input:focus {
            transform: translateX(-0.2rem);
            background-color: #edf8f8 !important;
        }

        input[type="radio"]  {
            display: none;
        }

        input[type="radio"]:checked + label {
            background-color: #e6ffec !important;
            transform: scale(1.0065);
        }

        label {
            transition: all .35s ease-in-out !important;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
        }

        label:hover {
            transform: scale(1.0065);
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.25);
        }
        
    </style>

</head>
<body>
    <header class="col-12 mb-5">
        <div class="d-flex flex-md-row flex-column justify-content-between w-100 rounded-bottom bg-dark">
            <a href="index.php" class="align-self-center">
                <img src="imgs/arena_logo.fw-min.png" alt="logo" class="align-self-start m-3"
                style="
                width: 100px;">
            </a>
            <form class="col-md-6 col-12 align-self-center d-flex flex-row justify-content-center">
                <div class="col-md-6 col-10">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </div>
                <button class="btn btn-success" type="submit">Search</button>
            </form>
            <a href="/controller/logoutcontroller.php" class="p-3 align-self-end text-light"><strong>LOGOUT</strong></a>
        </div>
    </header>
    <main class="d-flex flex-column align-items-center">
        <h1 class="text-center">Locação de quadras</h1>
        <div class="col-md-10 col-12 d-flex flex-lg-row flex-column justifi-content-center align-items-xl-start align-items-center">
            <div class="col-lg-4 col-10 d-felx flex-column">
                <h2>Quadra de Padel</h2>
                <input type="radio" name="arena" id="padel">
                <label for="padel" class="border bg-light rounded-5 p-3 m-3 d-flex flex-column justify-content-center align-items-lg-start align-items-sm-center">
                    <img src="imgs/quadra-de-padel.jpg" class="col-12 rounded-4" style="object-fit: cover;">
                    <p class="col-12 pt-3">Descubra a paixão pelo padel no Saúde Beach Arena!
                    Nossas quadras modernas oferecem o ambiente perfeito para aprimorar suas habilidades e se divertir. Seja você um iniciante ou um jogador experiente, nossa comunidade acolhedora e eventos emocionantes fazem do nosso clube o destino ideal para todos. Venha jogar e faça parte dessa energia vibrante!</p>
                </label>
            </div>
            <div class="col-lg-4 col-10 d-felx flex-column">
                <h2>Quadra de Beach Tennis</h2>
                <input type="radio" name="arena" id="beach-tennis">
                <label for="beach-tennis" class="border bg-light rounded-5 p-3 m-3 d-flex flex-column justify-content-center align-items-lg-start align-items-sm-center">
                    <img src="imgs/quadra-de-beach-tennis2.jpg" class="col-12 rounded-4" style="object-fit: cover;">
                    <p class="col-12 pt-3">Experimente a emoção do beach tennis no Saúde Beach Arena!
                    Nossas quadras de areia são ideais para partidas emocionantes e momentos de lazer. Jogue com amigos, participe de torneios ou melhore seu jogo com nossas aulas. No Saúde Beach Arena, promovemos um estilo de vida ativo e saudável através do esporte. Venha e sinta a vibração da praia em cada jogo!</p>
                </label>
            </div>
            <div class="col-lg-4 col-10 d-felx flex-column">
                <h2>Quadra de Pickleball</h2>
                <input type="radio" name="arena" id="piclkeball">
                <label for="piclkeball" class="border bg-light rounded-5 p-3 m-3 d-flex flex-column justify-content-center align-items-lg-start align-items-sm-center">
                    <img src="imgs/quadra-de-pickleball.jpg" class="col-12 rounded-4" style="object-fit: cover;">
                    <p class="col-12 pt-3">Divirta-se jogando pickleball no Saúde Beach Arena!
                    Nossas quadras estão prontas para receber jogadores de todas as idades e níveis. O pickleball é um esporte dinâmico e acessível que combina diversão e competição. Junte-se a nós, participe dos nossos eventos e torneios, e descubra por que o pickleball está conquistando corações. Aqui, a diversão é garantida!</p>
                </label>
            </div>
        </div>
    </main>
</body>
</html>