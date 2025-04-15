<?php
// criando a classe "Sessão" e já iniciando ela
class Sessao {
    public static function iniciar() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
// Define uma váriavel 
    public static function set($chave, $valor): void {
        $_SESSION[$chave] = $valor;
    }
    public static function get($chave): mixed {
        return $_SESSION[$chave] ?? null;
    }
    // destrói a sessão
    public static function destruir(): void {
        session_start();
        session_destroy();
    }
}
?>