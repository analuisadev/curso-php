<?php 

$login = "marcelo@example.com";
$senha = 1234;
$userLogin;
$userPassword;

if(($login === $userLogin) && ($senha === $userPassword)) {
    echo "Autenticação concluída com sucesso";
} else {
    echo "Usuário ou senha incorretos";
}