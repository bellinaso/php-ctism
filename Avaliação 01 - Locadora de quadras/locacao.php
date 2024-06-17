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

</head>
<body>
    <header class="mb-5">
        <div class="d-flex flex-row w-100 rounded-bottom bg-dark">
            <a href="index.php">
                <img src="imgs/arena_logo.fw-min.png" alt="logo" class="align-self-center m-3"
                    style="
                        width: 100px;
                        filter: drop-shadow(0 0 5rem #fff);">
            </a>
            <form class="col-md-9 align-self-center d-flex flex-row">
                <div class="col-md-4">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </div>
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
    </header>
    <main>
        <div class="w-100 d-flex flex-column align-items-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <h1 class="text-center">Locação de quadras</h1>
                <div class="d-flex flex-column justify-content-center">
                    <div class="d-felx flex-column justify-content-center align-items-center mb-5">
                        <h2>Quadra de Padel</h2>
                        <div class="w-100 d-flex flex-row">
                            <img src="imgs/quadra-de-padel.png" alt="" class="w-50 rounded-4 m-3" style="object-fit: cover;">
                            <p class="w-50 m-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorem in iure. Deserunt fugit quas vel placeat consectetur, asperiores voluptate corrupti consequatur veniam molestias, doloremque commodi cum. Necessitatibus ipsa nihil qui incidunt laudantium inventore, nemo dolorum ad corrupti laboriosam architecto facilis placeat id cupiditate consequatur blanditiis veniam temporibus dolorem adipisci, voluptas culpa. Tenetur, optio. Sapiente qui, possimus itaque tempore vitae, facere veniam iste eveniet repellendus ex distinctio asperiores nihil eligendi nesciunt quos quo voluptas. Quia possimus rerum deserunt eos praesentium repudiandae facilis ipsam harum quae vitae consequatur libero, laboriosam aspernatur amet voluptate provident veritatis odit culpa dolorum dolor rem minima!</p>
                        </div>
                        <div class="mb-3 mt-3 d-flex justify-content-end">
                            <form action="/controller/locacaoController.php" method="POST" class="d-flex">
                                <input type="number" name="padelHours" id="beachTenisHours" class="form-control m-2" placeholder="Quantidade de horas" min=0>
                                <input type="submit" class="btn btn-success m-2" value="Agendar">
                            </form>
                        </div>
                    </div>

                    <div class="d-felx flex-column justify-content-center align-items-center mb-5">
                        <h2>Quadra de Pickleball</h2>
                        <div class="w-100 d-flex flex-row">
                            <p class="w-50 m-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorem in iure. Deserunt fugit quas vel placeat consectetur, asperiores voluptate corrupti consequatur veniam molestias, doloremque commodi cum. Necessitatibus ipsa nihil qui incidunt laudantium inventore, nemo dolorum ad corrupti laboriosam architecto facilis placeat id cupiditate consequatur blanditiis veniam temporibus dolorem adipisci, voluptas culpa. Tenetur, optio. Sapiente qui, possimus itaque tempore vitae, facere veniam iste eveniet repellendus ex distinctio asperiores nihil eligendi nesciunt quos quo voluptas. Quia possimus rerum deserunt eos praesentium repudiandae facilis ipsam harum quae vitae consequatur libero, laboriosam aspernatur amet voluptate provident veritatis odit culpa dolorum dolor rem minima!</p>
                            <img src="imgs/quadra-de-pickleball.png" alt="" class="w-50 rounded-4 m-3" style="object-fit: cover;">
                        </div>
                        <div class="mb-3 mt-3 d-flex justify-content-end">
                            <form action="/controller/locacaoController.php" method="POST" class="d-flex">
                                <input type="number" name="pickleballHours" id="beachTenisHours" class="form-control m-2" placeholder="Quantidade de horas" min=0>
                                <input type="submit" class="btn btn-success m-2" value="Agendar">
                            </form>
                        </div>

                    <div class="d-felx flex-column justify-content-center align-items-center mb-5">
                        <h2>Quadra de Beach Tenis</h2>
                        <div class="w-100 d-flex flex-row">
                            <img src="imgs/quadra-de-beach-tennis3.png" alt="" class="w-50 rounded-4 m-3" style="object-fit: cover;">
                            <p class="w-50 m-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorem in iure. Deserunt fugit quas vel placeat consectetur, asperiores voluptate corrupti consequatur veniam molestias, doloremque commodi cum. Necessitatibus ipsa nihil qui incidunt laudantium inventore, nemo dolorum ad corrupti laboriosam architecto facilis placeat id cupiditate consequatur blanditiis veniam temporibus dolorem adipisci, voluptas culpa. Tenetur, optio. Sapiente qui, possimus itaque tempore vitae, facere veniam iste eveniet repellendus ex distinctio asperiores nihil eligendi nesciunt quos quo voluptas. Quia possimus rerum deserunt eos praesentium repudiandae facilis ipsam harum quae vitae consequatur libero, laboriosam aspernatur amet voluptate provident veritatis odit culpa dolorum dolor rem minima!</p>
                        </div>
                        <div class="mb-3 mt-3 d-flex justify-content-end">
                            <form action="/controller/locacaoController.php" method="POST" class="d-flex">
                                <input type="number" name="beachTenisHours" id="beachTenisHours" class="form-control m-2" placeholder="Quantidade de horas" min=0>
                                <input type="submit" class="btn btn-success m-2" value="Agendar">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>