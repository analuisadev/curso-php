<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Formulário 2</title>
</head>
<body>
    <?php
        if(empty($_POST['userName']) && empty($_POST['userPassword'])) {
            echo "<p>Nome de usuário ou senha não preenchidos.</p>";
        } else if(htmlspecialchars($_POST["userName"]) === "admin" && htmlspecialchars($_POST["userPassword"] === 1234)) {
            echo "<p>Olá " . htmlspecialchars($_POST["userName"]) . " !</p>";
        } else {
            echo "<p>Nome ou senha incorretos</p>";
        }
    ?>
</body>
</html>