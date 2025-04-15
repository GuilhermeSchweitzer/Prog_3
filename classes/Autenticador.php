<?php
// criando a classe "Autenticador"
class Autenticador {
    private static $usuarios = [];
    // registra um novo usuário
    public static function registrar(Usuario $usuario): void {
        self::$usuarios[$usuario->getEmail()] = $usuario;
    }
    // tenta logar
    public static function logar($email, $senha): Usuario|null {
        if (isset(self::$usuarios[$email])) {
            $usuario = self::$usuarios[$email];
            if ($usuario->validar($senha)) {
                return $usuario;
            }
        }
        return null;
    }
    public static function getUsuarios(): array {
        return self::$usuarios;
    }
}
?>