<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento - Locação</title>
</head>
<body>
    <p>
        Valor: <?php
            if(isset($_REQUEST)) {
                echo 'R$'.$_REQUEST['value'];
            }
        ?>
    </p>
</body>
</html>