<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <style>
        label {
            color: red;
        }
        section {
            align-items: start;
        }
        button {
            width: 50%;
            height: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-color: #fff;
            border: 1px solid #33cc33;
            transition: all ease-in-out .2s;
        }
        button a {
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #002266;
            transition: all ease-in-out .2s;
            width: 100%;
            height: 2rem;
        }
        button:hover {
            background-color: #33cc33;
        }
        button:hover a {
            color: #fff;
        }
        .button {
            display: flex;
            flex-direction: row;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php
        echo "<h2>Seja Bem vindo</h2>";
        echo "<section>";
            if($_POST) {
                $nome = $_POST["userName"];
                $email = $_POST["userMail"];
                $telefone = $_POST["userNumber"];
                $atuacao = $_POST["userActing"];
                $acesso = $_POST["userAccess"];
                $estado = $_POST["userState"];
                $cidade = $_POST["userCity"];
                echo "<p>$nome você está logado como <label class='userInfo'>$acesso</label></p>";
                echo "<p>Email: <label>$email</label> | Telefone: <label>$telefone</label></p>";
                echo "<p>Seu serviço está hospedado em <label class='userInfo'>$cidade - $estado</label></p>";
                echo "<div class='button'>";
                echo "<button style='border-radius: 1rem 0 0 1rem;'><a href='https://www.yout-ube.com/watch?v=dQw4w9WgXcQ' target='_blank'>Fazer algo</a></button>";
                echo "<button style='border-radius: 0 1rem 1rem 0;'><a href='#'>Fazer nada</a></button>";
                echo "</div>";
            }
        echo "</section>";
    ?>
    </body>
</html>