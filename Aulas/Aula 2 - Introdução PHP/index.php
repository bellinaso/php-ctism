<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        input[type="checkbox"] {
            width: 1.5rem;
            height: 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Menu -->
    <?php
        @session_start();
        if(isset($_SESSION['login'])) {
            echo '
            <header>
                <ul class="header">
                    <li><a href="#">Cadastro de produtos</a></li>
                    <li><a href="#">Cadastro de clientes</a></li>
                    <li><a href="#">Cadastro de propriedades</a></li>
                    <li><a href="#">Relatórios</a></li>
                    <li><a href="controller/logoutController.php">Logout</a></li>
                </ul>
            </header>
            ';
        }
    ?>
    <main>
        <form class="form" method="post" action="controller/loginController.php">
            <h2>Entrar</h2>
            <table>
                <tr>
                    <td width="25%"><label>Email</label></td>
                    <?php
                        if(isset($_COOKIE['email'])) {
                            echo '<td width="75%"><input type="email" name="email" placeholder="Insira seu email" value="'.$_COOKIE['email'].'" required></td>';
                        }
                        else {
                            echo '<td width="75%"><input type="email" name="email" placeholder="Insira seu email" required></td>';
                        }
                    ?>
                </tr>
                <tr>
                    <td width="25%"><label>Senha</label></td>
                    <td width="75%"><input type="password" name="senha" placeholder="Insira sua senha" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Entrar" required style="color: #008000;"></td>
                </tr>
                <tr>
                    <td colspan="2"><label for="email-checkbox"><input type="checkbox" name="save-email" id="email-checkbox"> Salvar email</label></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                            if(@isset($_SESSION['login'])) {
                                echo '<p>Você já entrou como '.$_SESSION['login'].'</p>';
                            }
                            else {
                                if(isset($_REQUEST) && @$_REQUEST['cod'] == '171') {
                                    echo '<span>O email ou a senha não confere</span>';
                                }
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </main>
</body>
</html>