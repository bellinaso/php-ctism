<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <style>
        .container {
            border: 1px solid #000;
        }
        .container-fluid {
            border: 1px solid #000;
        }
    </style> -->
</head>
<body>
    <header></header>
    <main>
        <div class="container  pt-5 my-5 border bg-info">
            <h1>Cadastro de automóveis</h1>
            <p class="text-bg-danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quia, quae velit dicta earum quaerat? Accusantium ex, minima distinctio neque maxime nam voluptatibus atque suscipit doloribus culpa magni reprehenderit fuga.</p>
            <p class="h1">Teste</p>
            <div class="alert alert-warning">
                <strong>Atenção:</strong> é necessário cadastrar todas as marcas
            </div>
            <form>
                <div class="mb-3 mt-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do automóvel">
                </div>
                <div class="mb-3 mt-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="option1" name="option">
                        <label for="option1" class="form-label">Opção</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="option2" name="option">
                        <label for="option2" class="form-label">Opção</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="option3" name="option">
                        <label for="option3" class="form-label">Opção</label>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="modelo"></label>
                    <select name="modelo" id="modelo" class="form-select" multiple>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="container-fluid">
            <h1>Cadastro de automóveis</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quia, quae velit dicta earum quaerat? Accusantium ex, minima distinctio neque maxime nam voluptatibus atque suscipit doloribus culpa magni reprehenderit fuga.</p>
        </div>
    </main>
</body>
</html>