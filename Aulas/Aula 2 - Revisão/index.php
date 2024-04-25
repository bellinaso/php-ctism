<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Menu -->
    <header>
        <ul class="header">
            <li><a href="#">Cadastro de produtos</a></li>
            <li><a href="#">Cadastro de clientes</a></li>
            <li><a href="#">Cadastro de propriedades</a></li>
            <li><a href="#">Relatórios</a></li>
            <li><a href="controller/logoutController.php">Logout</a></li>
        </ul>
    </header>
    <main>
        <form class="form" method="post" action="controller/loginController.php">
            <h2>Entrar</h2>
            <table>
                <tr>
                    <td><label>Email</label></td>
                    <td><input type="email" name="email" placeholder="Insira seu email" required></td>
                </tr>
                <tr>
                    <td><label>Senha</label></td>
                    <td><input type="password" name="senha" placeholder="Insira sua senha" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Entrar" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                            if(isset($_REQUEST) && @$_REQUEST['cod'] == '171') {
                                echo '<span>O email ou a senha não confere</span>';
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </main>
</body>
</html>