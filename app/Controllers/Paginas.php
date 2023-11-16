<?php

class Paginas extends Controller {
    public function __construct()
    {
        $this->postModel = $this->model('Post');
        $this->usuarioModel = $this->model('Usuario');
    }

    public function index(){
        if (Sessao::estaLogado()) :
            URL::redirecionar('posts');
        endif;

        $dados = [
            //'tituloPagina' => 'Página Inicial'
            'posts' => $this->postModel->lerCarrosel()
                ];

        $this->view('paginas/home', $dados);
    }

    public function sobre(){
        $dados = [
            //'tituloPagina' => 'AQUI',
            'posts' => $this->postModel->lerPosts()
           //    'usuario'=>$this->usuarioModel->lerUsuario()
        ];

        $this->view('paginas/sobre', $dados);
    }

    public function autor(){
        $dados = [
            //'tituloPagina' => 'AQUI',
            'posts' => $this->postModel->lerPosts()
           //    'usuario'=>$this->usuarioModel->lerUsuario()
        ];

        $this->view('paginas/autor', $dados);
    }

    public function livros(){
        $dados = [
            //'tituloPagina' => 'AQUI',
            'posts' => $this->postModel->lerPostsObra()
           //    'usuario'=>$this->usuarioModel->lerUsuario()
        ];

        $this->view('paginas/livros', $dados);
    }

    public function auto_des(){
        $dados = [
            //'tituloPagina' => 'AQUI',
            'posts' => $this->postModel->lerPosts()
           //    'usuario'=>$this->usuarioModel->lerUsuario()
        ];

        $this->view('paginas/auto_des', $dados);
    }

    
    public function pesquisa(){
        $dados = [
            //'tituloPagina' => 'AQUI',
            'posts' => $this->postModel->buscarLivros($termo_busca)
           //    'usuario'=>$this->usuarioModel->lerUsuario()
        ];

        $this->view('paginas/pesquisa', $dados);
    }
    
    
}