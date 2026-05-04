<?php

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $usuarios = [
            [
                'id' => 1,
                'nome' => 'Lucas',
                'email' => 'lucas@example.com',
                'senha' => 'senha123',
            ],
            [
                'id' => 2,
                'nome' => 'Nina',
                'email' => 'Nina@example.com',
                'senha' => 'senha456',
            ],
            [
                'id' => 3,
                'nome' => 'Pequena',
                'email' => 'pequena@example.com',
                'senha' => 'senha789',
            ]
    ];

    public function __construct($nome = null, $email = null, $senha = null)
    {
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
            return; true;
        }
        echo "Erro: Todos os campos são obrigatórios.";
        return false;
    }
}
