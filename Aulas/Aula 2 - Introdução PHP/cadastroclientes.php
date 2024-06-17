<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        #btn1 {
            border-top: 1px solid #4e8cca;
            border-bottom: 1px solid #4e8cca;
            border-left: 1px solid #4e8cca;
            border-right: none;
            border-radius: .9rem 0 0 .9rem;
            transform: translateX(1px);
            color: #ff3333;
        }

        #btn2 {
            border-top: 1px solid #4e8cca;
            border-bottom: 1px solid #4e8cca;
            border-left: none;
            border-right: 1px solid #4e8cca;
            border-radius: 0 .9rem .9rem 0;
            transform: translateX(-1px);
            color: #008000;
        }

        #btn1:hover {
            border: 1px solid #4e8cca;
            border-radius: .9rem;
            transform: translateX(1px);
        }

        #btn2:hover {
            border: 1px solid #4e8cca;
            border-radius: .9rem;
            transform: translateX(-1px);
        }
    </style>
</head>
<body>
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
        <form class="form" method="post" action="controller/clientesController.php">
            <h2>Cadastro de Clientes</h2>
            <table>
                <tr>
                    <td><label>Nome</label></td>
                    <td><input type="text" name="nome" id="" placeholder="Insira seu Nome"></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td><input type="text" name="email" id="" placeholder="Insira seu Email"></td>
                </tr>
                <tr>
                    <td><label>Data de nascimento</label></td>
                    <td><input type="date" name="nascimento" id=""></td>
                </tr>
                <tr>
                    <td><label>Senha</label></td>
                    <td><input type="text" name="senha" id="" placeholder="Crie uma Senha"></td>
                </tr>
                <tr>
                    <td><label>Repita sua senha</label></td>
                    <td><input type="text" name="senhaConfirm" id="" placeholder="Repita a Senha"></td>
                </tr>
                    <td colspan="2" style="text-align: center;">
                        <?php
                            // caso exista query strings
                            if($_REQUEST) {
                                if($_REQUEST['cod'] == 171) {
                                    echo '<span style="padding: .2rem; background-color: #ff9999; border: 1px solid #ff3333; border-radius: .6rem;">As senhas não coincidem</span>';
                                }
                                else if($_REQUEST['cod'] == 173) {
                                    echo '<span style="padding: .2rem; background-color: #ff9999; border: 1px solid #ff3333; border-radius: .6rem;">O e-mail informado não é válido!</span>';
                                }
                                else if($_REQUEST['cod'] == 172) {
                                    echo '<span style="padding: .2rem; background-color: #ccffcc; border: 1px solid #66ff66; border-radius: .6rem;">Usuário cadastrado com sucesso!</span>';
                                }
                            }
                        ?>
                    </td>
                <tr>
                    <td><input id="btn1" type="reset" value="Limpar Campos"></td>
                    <td><input id="btn2" type="submit" value="Cadastrar"></td>
                </tr>
            </table>
        </form>
    </main>
    <script>
        btn1 = document.getElementById("btn1");
        btn2 = document.getElementById("btn2");
        btn1.addEventListener("mouseover", () => {
            btn2.style = "border: 1px solid #4e8cca; border-radius: .6rem .9rem .9rem .6rem; transform: translateX(2px);";
            btn1.style = "border: 1px solid #4e8cca; border-radius: .9rem";
        })
        btn1.addEventListener("mouseleave", () => {
            btn2.style = "border-top: 1px solid #4e8cca; border-bottom: 1px solid #4e8cca; border-left: none; border-right: 1px solid #4e8cca; border-radius: 0 .9rem .9rem 0; transform: translateX(-2px);";
            btn1.style = "border: 1px solid #4e8cca; border-radius: .9rem 0 0 .9rem; border-right: none;";
        })
        
        btn2.addEventListener("mouseover", () => {
            btn1.style = "border: 1px solid #4e8cca; border-radius: .9rem .6rem .6rem .9rem; transform: translateX(-2px);";
            btn2.style = "border: 1px solid #4e8cca; border-radius: .9rem";
        })
        btn2.addEventListener("mouseleave", () => {
            btn1.style = "border-top: 1px solid #4e8cca; border-bottom: 1px solid #4e8cca; border-left: 1px solid #4e8cca; border-right: none; border-radius: .9rem 0 0 .9rem; transform: translateX(2px);";
            btn2.style = "border: 1px solid #4e8cca; border-radius: 0 .9rem .9rem 0; border-left: none;";
        })
    </script>
</body>
</html>