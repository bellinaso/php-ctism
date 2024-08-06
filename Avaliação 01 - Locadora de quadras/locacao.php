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

        input[type="search"]:hover {
            transform: translateX(-0.2rem);
            background-color: #edf8f8;
        }

        input[type="search"]:focus {
            transform: translateX(-0.2rem);
            background-color: #edf8f8 !important;
        }

        input[type="radio"], input[type="checkbox"]  {
            display: none;
        }

        input[type="radio"]:checked + label.card {
            transform: scale(1.0065);
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.25);
        }

        input[type="radio"].time:checked + label.time {
            transform: scale(1.0175);
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
            background-color: #e4e7e7 !important;
        }

        label {
            transition: all .25s ease-in-out !important;
            cursor: pointer;
        }

        label.time:hover {
            transform: scale(1.0175);
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
        }

        label.card {
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
        }

        label.card:hover {
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
                <label for="padel" class="card border bg-light rounded-5 p-3 m-3 d-flex flex-column justify-content-center align-items-lg-start align-items-sm-center">
                    <img src="imgs/quadra-de-padel.jpg" class="col-12 rounded-4" style="object-fit: cover;">
                    <p class="col-12 pt-3">Descubra a paixão pelo padel no Saúde Beach Arena!
                    Nossas quadras modernas oferecem o ambiente perfeito para aprimorar suas habilidades e se divertir. Seja você um iniciante ou um jogador experiente, nossa comunidade acolhedora e eventos emocionantes fazem do nosso clube o destino ideal para todos. Venha jogar e faça parte dessa energia vibrante!</p>
                    <h4 class="align-self-end">R$80,00<small class="text-muted"> / hora</small></h4>
                    <div class="time-form d-flex flex-column">
                        <div class="col">
                            <div class="col-12 d-flex flex-wrap">
                                <h5 class="col-12">Entrada</h5>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry8"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry8">08:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry8.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry8.5">08:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry9"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry9">09:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry9.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry9.5">09:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry10"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry10">10:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry10.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry10.5">10:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry11"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry11">11:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry12.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry12.5">12:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry13"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry13">13:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry13.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry13.5">13:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry14"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry14">14:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry14.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry14.5">14:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry15"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry15">15:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry15.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry15.5">15:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry16"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry16">16:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry16.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry16.5">16:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry17"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry17">17:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry17.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry17.5">17:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry18"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry18">18:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry18.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry18.5">18:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry19"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry19">19:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry19.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry19.5">19:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry20"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry20">20:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry20.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry20.5">20:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry21"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry21">21:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="entryTime" id="entry21.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="entry21.5">21:30</label>
                                </div>
                            </div>
                            <div class="col-12 d-flex flex-wrap">
                                <h5 class="col-12">Saída</h5>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit8.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit8.5">08:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit9"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit9">09:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit9.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit9.5">09:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit10"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit10">10:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit10.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit10.5">10:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit11"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit11">11:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit12.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit12.5">12:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit13"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit13">13:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit13.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit13.5">13:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit14"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit14">14:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit14.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit14.5">14:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit15"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit15">15:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit15.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit15.5">15:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit16"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit16">16:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit16.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit16.5">16:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit17"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit17">17:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit17.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit17.5">17:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit18"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit18">18:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit18.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit18.5">18:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit19"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit19">19:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit19.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit19.5">19:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit20"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit20">20:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit20.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit20.5">20:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit21"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit21">21:00</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit21.5"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit21.5">21:30</label>
                                </div>
                                <div class="form-check p-0 m-1">
                                    <input class="time form-check-input" type="radio" name="exitTime" id="exit22"/>
                                    <label class="time form-check-label p-2 border rounded-3" for="exit22">22:00</label>
                                </div>
                            </div>
                        </div>
                        <h4 class="align-self-end">R$<small>00,00</small></h4>
                        <div class="col-12 mb-3 mt-3 d-flex justify-content-center">
                            <input type="submit" value="Realizar locação" class="col-12 btn btn-success">
                        </div>
                    </div>
                </label>
            </div>
            <div class="col-lg-4 col-10 d-felx flex-column">
                <h2>Quadra de Beach Tennis</h2>
                <input type="radio" name="arena" id="beach-tennis">
                <label for="beach-tennis" class="card border bg-light rounded-5 p-3 m-3 d-flex flex-column justify-content-center align-items-lg-start align-items-sm-center">
                    <img src="imgs/quadra-de-beach-tennis2.jpg" class="col-12 rounded-4" style="object-fit: cover;">
                    <p class="col-12 pt-3">Experimente a emoção do beach tennis no Saúde Beach Arena!
                    Nossas quadras de areia são ideais para partidas emocionantes e momentos de lazer. Jogue com amigos, participe de torneios ou melhore seu jogo com nossas aulas. No Saúde Beach Arena, promovemos um estilo de vida ativo e saudável através do esporte. Venha e sinta a vibração da praia em cada jogo!</p>
                    <h4 class="align-self-end">R$120,00<small class="text-muted"> / hora</small></h4>
                </label>
            </div>
            <div class="col-lg-4 col-10 d-felx flex-column">
                <h2>Quadra de Pickleball</h2>
                <input type="radio" name="arena" id="piclkeball">
                <label for="piclkeball" class="card border bg-light rounded-5 p-3 m-3 d-flex flex-column justify-content-center align-items-lg-start align-items-sm-center">
                    <img src="imgs/quadra-de-pickleball.jpg" class="col-12 rounded-4" style="object-fit: cover;">
                    <p class="col-12 pt-3">Divirta-se jogando pickleball no Saúde Beach Arena!
                    Nossas quadras estão prontas para receber jogadores de todas as idades e níveis. O pickleball é um esporte dinâmico e acessível que combina diversão e competição. Junte-se a nós, participe dos nossos eventos e torneios, e descubra por que o pickleball está conquistando corações. Aqui, a diversão é garantida!</p>
                    <h4 class="align-self-end">R$150,00<small class="text-muted"> / hora</small></h4>
                </label>
            </div>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>