<?php

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function lerPosts(){
        $this->db->query("SELECT auto_id,
       auto_nome,
       auto_bibliografia,
       auto_imagem,
       poin_id,
       poin_nome,
       poin_descricao,
       poin_localidade,
       poin_imagem FROM `bd_biblioteca`.`vw_autores_povos`;

    
    ");

       return $this->db->resultados(); 
    }
    
    public function lerPostsObra(){

        // Consulta para obter dados dos autores e povos indígenas
        $this->db->query("SELECT
        obra.obra_id,
        obra.obra_titulo,
        CONVERSAO_DATA_OBRA(obra.obra_ano_publicado) as obra_ano_publicado,
        obra.obra_descricao,
        obra.obra_editora,
        obra.obra_nr_pagina,
        obra.obra_imagem,
        genero.gene_id,
        genero.gene_nome,
        autor.auto_nome
    FROM obra
    JOIN
    categorizar ON obra.obra_id = categorizar.obra_id
    JOIN
    genero ON categorizar.gene_id = genero.gene_id
    JOIN
        autor ON obra.auto_id = autor.auto_id;
    ");
    
        return $this->db->resultados();
    }


    public function lerCarrosel(){
        $this->db->query("CALL ObterObras(3);");

        return $this->db->resultados();
    }

    public function lerUsuario(){
        $this->db->query("SELECT `usua_id`, `usua_email`, `usua_senha`, `usua_nome`
        FROM `bd_biblioteca`.`usuario`;");

        return $this->db->resultados();
    }





    public function armazenar($dados)
    {
        $this->db->query("INSERT INTO posts(usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");

        $this->db->bind("usuario_id", $dados['usuario_id']);
        $this->db->bind("titulo", $dados['titulo']);
        $this->db->bind("texto", $dados['texto']);

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }
    public function atualizar($dados)
    {
        $this->db->query("UPDATE posts SET titulo = :titulo, texto = :texto WHERE id = :id");

        $this->db->bind("id", $dados['id']);
        $this->db->bind("titulo", $dados['titulo']);
        $this->db->bind("texto", $dados['texto']);

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }

    public function lerPostPorId($id){
        $this->db->query("SELECT * FROM usuario WHERE usua_id = :id");
        $this->db->bind('id', $id);
        return $this->db->resultado();
    }
    public function destruir($id)
    {
        $this->db->query("DELETE FROM usuario WHERE usua_id = :id");
        $this->db->bind("id", $id);

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }
}
