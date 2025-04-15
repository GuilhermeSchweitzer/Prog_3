<?php
// página inicial, pega as informações da classe "Sessão" e inicia elas
require_once 'classes/Sessao.php';
Sessao::iniciar();
$usuario = Sessao::get('usuario');
if (!$usuario) {
    header(header: 'Location: login.php');
    exit;
}
// exibe uma mensagem de boas-vindas junto do nome utilizado e e o email salvo
echo "Bem-Vindo, " . $usuario->getNome() . "!<br>";
if (isset($_COOKIE['email'])) {
    echo "Email salvo: " . htmlspecialchars(string: $_COOKIE['email']) . "<br>";
}
echo '<a href="logout.php">Sair</a>';
?>