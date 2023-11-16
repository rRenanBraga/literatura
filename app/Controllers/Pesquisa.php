<?php

class Pesquisa extends Controller {

    public function pesquisa() {

        if (isset($_GET["entry-search"])) {
            $termo_busca = $_GET["entry-search"];
            $Busca = $this->model('Busca');
            $dados['livros'] = $Busca->buscarLivros($termo_busca);

            if ($dados['livros'] === false) {
                // Tratamento de erro
                echo "Erro na busca de livros.";
            } else {
                $this->view('pesquisa/pesquisa', $dados);
            }
        }
    }
}

?>