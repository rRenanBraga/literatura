<?php
class Busca {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function buscarLivros($termo_busca) {
        
        $this->db->query("CALL buscarLivros(:termo_busca)");
        $this->db->bind(":termo_busca", $termo_busca);
        return $this->db->resultados();
    }


}
?>