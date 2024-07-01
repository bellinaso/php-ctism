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

        img {
            transition: all .35s ease-in-out !important;
        }

        img:hover {
            transform: scale(1.03);
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.25);
        }
    </style>

</head>
<body>
    <header class="mb-5">
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
        <div class="col-lg-8 col-md-10 col-12 d-flex flex-column justifi-content-center align-items-center">
            <h1 class="text-center">Locação de quadras</h1>
            <div class="col-xl-8 col-10 d-felx flex-column mb-5">
                <h2>Quadra de Padel</h2>
                <div class="d-flex flex-xl-row flex-column justify-content-center align-items-lg-start align-items-sm-center">
                    <img src="imgs/quadra-de-padel.jpg" class="col-xl-6 col-10 rounded-4 m-3" style="object-fit: cover;">
                    <p class="col-xl-6 col-10 m-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorem in iure. Deserunt fugit quas vel placeat consectetur, asperiores voluptate corrupti consequatur veniam molestias, doloremque commodi cum. Necessitatibus ipsa nihil qui incidunt laudantium inventore, nemo dolorum ad corrupti laboriosam architecto facilis placeat id cupiditate consequatur blanditiis veniam temporibus dolorem adipisci, voluptas culpa. Tenetur, optio. Sapiente qui, possimus itaque tempore vitae, facere veniam iste eveniet repellendus ex distinctio asperiores nihil eligendi nesciunt quos quo voluptas. Quia possimus rerum deserunt eos praesentium repudiandae facilis ipsam harum quae vitae consequatur libero, laboriosam aspernatur amet voluptate provident veritatis odit culpa dolorum dolor rem minima!</p>
                </div>
                <div class="mb-3 mt-3 d-flex justify-content-lg-end justify-content-md-start">
                    <form action="/controller/locacaoController.php" method="POST" class="d-flex">
                        <input type="number" name="padelHours" id="beachTenisHours" class="form-control m-2" placeholder="Quantidade de horas" min=0>
                        <input type="submit" class="btn btn-success m-2" value="Agendar">
                    </form>
                </div>
            </div>

            <div class="col-xl-8 col-10 d-felx flex-column mb-5">
                <h2>Quadra de Pickleball</h2>
                <div class="d-flex flex-xl-row flex-column justify-content-center align-items-lg-start align-items-sm-center">
                    <p class="col-xl-6 col-10 m-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorem in iure. Deserunt fugit quas vel placeat consectetur, asperiores voluptate corrupti consequatur veniam molestias, doloremque commodi cum. Necessitatibus ipsa nihil qui incidunt laudantium inventore, nemo dolorum ad corrupti laboriosam architecto facilis placeat id cupiditate consequatur blanditiis veniam temporibus dolorem adipisci, voluptas culpa. Tenetur, optio. Sapiente qui, possimus itaque tempore vitae, facere veniam iste eveniet repellendus ex distinctio asperiores nihil eligendi nesciunt quos quo voluptas. Quia possimus rerum deserunt eos praesentium repudiandae facilis ipsam harum quae vitae consequatur libero, laboriosam aspernatur amet voluptate provident veritatis odit culpa dolorum dolor rem minima!</p>
                    <img src="imgs/quadra-de-pickleball.jpg" class="col-xl-6 col-10 rounded-4 m-3" style="object-fit: cover;">
                </div>
                <div class="mb-3 mt-3 d-flex justify-content-start">
                    <form action="/controller/locacaoController.php" method="POST" class="d-flex">
                        <input type="number" name="pickleballHours" id="beachTenisHours" class="form-control m-2" placeholder="Quantidade de horas" min=0>
                        <input type="submit" class="btn btn-success m-2" value="Agendar">
                    </form>
                </div>
            </div>

            <div class="col-xl-8 col-10 d-felx flex-column mb-5">
                <h2>Quadra de Beach Tenis</h2>
                <div class="d-flex flex-xl-row flex-column justify-content-center align-items-lg-start align-items-sm-center">
                    <img src="imgs/quadra-de-beach-tennis.jpg" class="col-xl-6 col-10 rounded-4 m-3" style="object-fit: cover;">
                    <p class="col-xl-6 col-10 m-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorem in iure. Deserunt fugit quas vel placeat consectetur, asperiores voluptate corrupti consequatur veniam molestias, doloremque commodi cum. Necessitatibus ipsa nihil qui incidunt laudantium inventore, nemo dolorum ad corrupti laboriosam architecto facilis placeat id cupiditate consequatur blanditiis veniam temporibus dolorem adipisci, voluptas culpa. Tenetur, optio. Sapiente qui, possimus itaque tempore vitae, facere veniam iste eveniet repellendus ex distinctio asperiores nihil eligendi nesciunt quos quo voluptas. Quia possimus rerum deserunt eos praesentium repudiandae facilis ipsam harum quae vitae consequatur libero, laboriosam aspernatur amet voluptate provident veritatis odit culpa dolorum dolor rem minima!</p>
                </div>
                <div class="mb-3 mt-3 d-flex justify-content-lg-end justify-content-md-start">
                    <form action="/controller/locacaoController.php" method="POST" class="d-flex">
                        <input type="number" name="beachTenisHours" id="beachTenisHours" class="form-control m-2" placeholder="Quantidade de horas" min=0>
                        <input type="submit" class="btn btn-success m-2" value="Agendar">
                    </form>
                </div>
            </div>

        </div>
    </main>
</body>
</html>