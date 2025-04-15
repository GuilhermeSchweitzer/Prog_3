<?php
// parte de fazer o logout
require_once 'classes/Sessao.php';
// destrói a sessão
Sessao::destruir();
header(header: 'Location: login.php');
?>