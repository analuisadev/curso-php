<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Formulário</title>
</head>
<body>
    <p>Olá <?php echo htmlspecialchars($_POST['name']); ?> agradecemos pelo seu contato. Responderemos para <?php echo $_POST['email']; ?> em breve</p>
</body>
</html>