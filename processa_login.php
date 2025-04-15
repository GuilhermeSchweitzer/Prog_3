<?php
// criar a parte para processar o login
require_once 'classes/Sessao.php';
require_once 'classes/Autenticador.php';
Sessao::iniciar();
// validação e sanitização dos dados
$email = filter_var(value: trim(string: $_POST['email']), filter: FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'];
$usuario = Autenticador::logar(email: $email, senha: $senha);
// criar o cookie para lembrar o email e senha
if ($usuario) {
    Sessao::set(chave: 'usuario', valor: $usuario);
    if ($lembrar) {
        setcookie("email_usuario", $email, time() +3600);
    }
// caso esteja certo, vai pro dashboard
    header(header: 'Location: dashboard.php');
// caso esteja errado, aparece essa mensagem
} else
{
    echo "E-mail e/ou senha incorreto(s).";
}
?>