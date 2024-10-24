<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Formulário 1</title>
</head>
<body>

    <?php
    if ((!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) && empty($_POST['name'])) { 
        echo "<p>Endereço de e-mail ou nome inválido</p>";
    } else {
        echo "<p>Olá " . htmlspecialchars($_POST['name']) . " agradecemos pelo seu contato. Responderemos para " . htmlspecialchars($_POST['email']). " em breve!</p>";
    }
    ?>
</body>
</html>