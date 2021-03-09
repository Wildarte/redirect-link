<?php


class User{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function validarEmail($email){
        $this->db->query("SELECT email FROM teste_tabela WHERE email = :email");
        $this->db->bind("email", $email);

        if($this->db->resultado()):
            return true;
        else:
            return false;
        endif;

    }

    public function validarUser($email, $senha){

        $this->db->query("SELECT * FROM teste_tabela WHERE email = :email");
        $this->db->bind("email", $email);

        if($this->db->resultado()):
            $resultado = $this->db->resultado();
            if(password_verify($senha, $resultado->senha)):
                return $resultado;
            else:
                return false;
            endif;
        else:
            return false;
        endif;

    }

    public function insert($dados){
        $this->db->query("INSERT INTO teste_tabela(nome, email, senha) VALUES(:nome, :email, :senha)");
        $this->db->bind("nome", $dados['nome']);
        $this->db->bind("email", $dados['email']);
        $this->db->bind("senha", $dados['senha']);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }

}