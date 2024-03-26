<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PampaCortePlus</title>
    <link rel="stylesheet" href="style/style.css">
    <style>
        label.required {
            color: #ff3333;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: start;
        }

        input, label {
            margin-top: .4rem;
        }

        .text-area-input{
            width: 100%;
            min-height: 2rem;
            padding: .3rem;
            border: 1px solid #002266;
            border-radius: .3rem;
        }

        input[type="radio"] {
            display: none;
        }

        .radio-input {
            width: 100%;
            height: 2rem;
            padding: .5rem;
            text-align: center;
            border: 1px solid #002266;
            border-radius: 1rem;
            background-color: #fff;
            color: #002266;
            transition: all ease-in-out .2s;
        }

        .radio-input:hover {
            background-color: #002266;
            color: #fff;
        }

        input[type="radio"]:checked+label {
            background-color: #002266;
            color: #fff;
        }

        select {
            width: 100%;
            height: 2rem;
            text-align: center;
            border: 1px solid #002266;
            border-radius: .3rem;
        }

        input[type="submit"] {
            width: 100%;
            height: 2rem;
            text-align: center;
            color: #002266;
            background-color: #fff;
            padding: .5rem;
            border: 1px solid #33cc33;
            border-radius: 1rem;
            transition: all ease-in-out .2s;
        }

        input[type="submit"]:hover {
            background-color: #33cc33;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <section>
        <form action="pag1.php" method="post">
            <label for="userName">
                Nome
                <label class="required">*</label>
            </label>
            <input type="text" class="text-area-input" name="userName" id="userName" placeholder="Insira aqui seu nome" required>

            <label for="userMail">
                Email
                <label class="required">*</label>
            </label>
            <input type="email" class="text-area-input" name="userMail" id="userMail" placeholder="Insira aqui seu email" required>

            <label for="userPhone">
                Telefone
                <label class="required">*</label>
            </label>
            <input type="tel" class="text-area-input" name="userNumber" id="userPhone" placeholder="Insira aqui seu telefone" required>

            <label for="userAtcing">
                Atuação
                <label class="required">*</label>
            </label>
            <textarea class="text-area-input" name="userActing" id="userAtcing" cols="30" rows="10" maxlength="60" placeholder="Descreva aqui sua atuação" required></textarea>

            <label>
                Acesso
                <label class="required">*</label>
            </label>
            <input type="radio" name="userAccess" id="admin" value="admin" required>
            <label for="admin" class="radio-input">
                Administrador
            </label>
            <input type="radio" name="userAccess" id="student" value="student" required>
            <label for="student" class="radio-input">
                Estudante
            </label>
            <input type="radio" name="userAccess" id="produtor" value="produtor" required>
            <label for="produtor" class="radio-input">
                Produtor
            </label>
            <input type="radio" name="userAccess" id="teacher" value="teacher" required>
            <label for="teacher" class="radio-input">
                Professor
            </label>
            <input type="radio" name="userAccess" id="technician" value="technician" required>
            <label for="technician" class="radio-input">
                Técnico
            </label>
            <input type="radio" name="userAccess" id="visitant" value="visitant" required>
            <label for="visitant" class="radio-input">
                Visitante
            </label>

            <label>
                Estado
                <label class="required">*</label>
            </label>
            <select id="userState" name="userState" required>
                <option selected disabled>Selecione um estado</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="PR">Paraná</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="SC">Santa Catarina</option>
            </select>

            <label>
                Cidade
                <label class="required">*</label>
            </label>
            <select id="userCity"  name="userCity" disabled required>
                <option selected disabled>Selecione uma cidade</option>
            </select>

            <input type="submit" value="Enviar">
        </form>
    </section>

    <script src="js/script.js"></script>
</body>
</html>