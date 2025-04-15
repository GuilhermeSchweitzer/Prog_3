<?php
// criando a classe "Usuarios" e criando os atributos privados
class Usuario {
    private $nome;
    private $email;
    private $senha;
    // usando o método __construct para inicializar os atributos
    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
    // criar a senha
        $this->senha = password_hash(password: $senha, algo: PASSWORD_DEFAULT);
    }
// verififcar se a senha está igual a colocada anteriormente
    public function validar($senha): bool {
        return password_verify(password: $senha, hash: $this->senha);
    }
    public function getNome(): mixed {
        return $this->nome;
    }
    public function getEmail(): mixed {
        return $this->email;
    }
}
?>