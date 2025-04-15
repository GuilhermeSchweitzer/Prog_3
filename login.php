<?php
// parte de fazer o login
?>

<form action="processa_login.php" method="POST">
    Email: <input type="email" name="email" required><br>
    Senha: <input type="password" name="senha" required><br>
    <label><input type="checkbox" name="lembrar"> Lembrar e-mail</label><br>
    <button type="submit">Entrar</button>
</form>
