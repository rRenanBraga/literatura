<?php

class Usuario
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function checarEmail($email)
    {
        $this->db->query("SELECT usua_email FROM usuario WHERE usua_email = :e");
        $this->db->bind(":e", $email);

        if ($this->db->resultado()) :
            return true;
        else :
            return false;
        endif;
    }

    public function armazenar($dados)
    {
        $this->db->query("INSERT INTO usuario(usua_nome, usua_email, usua_senha) VALUES (:usua_nome, :usua_email, :usua_senha)");

        $this->db->bind("nome", $dados['nome']);
        $this->db->bind("email", $dados['email']);
        $this->db->bind("senha", $dados['senha']);

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }

    public function checarLogin($email, $senha)
    {
        $this->db->query("SELECT * FROM usuario WHERE usua_email = :e");
        $this->db->bind(":e", $email);

        if ($this->db->resultado()) : 
            $resultado = $this->db->resultado();
            if(password_verify($senha, $resultado->senha)): 
                return $resultado;
            else:
                return false;
            endif;
        else :
            return false;
        endif;
    }

    public function lerUsuarioPorId($id){
        $this->db->query("SELECT * FROM usuario WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->resultado();
    }
    public function lerUsuario(){
        $this->db->query("SELECT * FROM usuario");
        return $this->db->resultado();
    }
}
