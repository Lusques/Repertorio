<?php
class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $usuarios = [];

    public function __construct($nome = null, $email = null, $senha = null)
    {
        $this->usuarios = [
            [
                'id' => 1,
                'nome' => 'Lucas',
                'email' => 'lucas@example.com',
                'senha' => password_hash('senha123', PASSWORD_DEFAULT),
            ],
            [
                'id' => 2,
                'nome' => 'Nina',
                'email' => 'Nina@example.com',
                'senha' => password_hash('senha456', PASSWORD_DEFAULT),
            ],
            [
                'id' => 3,
                'nome' => 'Pequena',
                'email' => 'pequena@example.com',
                'senha' => password_hash('senha789', PASSWORD_DEFAULT),
            ]
        ];
        $this->id = count($this->usuarios) + 1;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;

    }

    public function getUsuarios()
    {
        return $this->usuarios;
    }
    public function salvar() {
        if (isset($this->nome) && isset($this->email) && isset($this->senha)) {
            $this->usuarios[] = [
                'id' => $this->id,
                'nome' => $this->nome,
                'email' => $this->email,
                'senha' => $this->senha
            ];
            return true;
        }
        return false;
    }
}
