<?php
// parte para processar o cadastro
require_once 'classes/Usuario.php';
require_once 'classes/Autenticador.php';
// validação e sanitização dos dados
$nome = htmlspecialchars(string: trim(string: $_POST['nome']));
$email = filter_var(value: trim(string: $_POST['email']), filter: FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'];
// cria novo cadastro
if ($nome && $email && $senha) {
    $usuario = new Usuario($nome, $email, $senha);
    Autenticador::registrar(usuario: $usuario);
    header(header: 'Location: login.php');
}
else {
    echo "E-mail e/ou senha, inválido(s).";
}
?>