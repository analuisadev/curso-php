<?php

include("connection.php");

$sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE idusuarios=:idusuarios";

$stmt = $pdo->prepare($sql);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST["userId"];
    $username = htmlspecialchars($_POST["name"]);
    $useremail = htmlspecialchars($_POST["email"]);
    $userpassword = password_hash($_POST["newPassword"], PASSWORD_DEFAULT);

    $stmt->bindParam(":idusuarios", $id);
    $stmt->bindParam(":nome", $username);
    $stmt->bindParam(":email", $useremail);
    $stmt->bindParam(":senha", $userpassword);
    
    
    $stmt->execute();
    
    echo "Usuário atualizado com sucesso!";
} else {
    echo "Erro ao enviar dados";
}
