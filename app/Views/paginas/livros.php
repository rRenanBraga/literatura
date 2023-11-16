<div class="container py-5">
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/livro.css">
    <script src="<?=URL?>/public/js/livro.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>

    <?= Sessao::mensagem('post') ?>
    <div class="card bg-light">
        <?php $posts = $dados['posts'];  ?>
        <div class="livro-container row justify-content-center">
            <?php foreach ($posts as $post) : ?>

                <div class="col-md-8 mb-2">
                    <div class="container-botao d-flex flex-column align-items-center h-100">
                        <div class="livro">
                            <img class="card-img-top" src="<?= URL?>/public/img/<?= $post->obra_imagem?>" alt="Card image cap">    
                            <div class="livro-titulo" data-imagem="<?= URL?>/public/img/<?= $post->obra_imagem?>" 
                            data-titulo="<?= $post->obra_titulo?>" data-descricao="<?= $post->obra_descricao?>" 
                            data-editora="<?= $post->obra_editora?>"data-ano="<?= $post->obra_ano_publicado?>"data-pagina="<?= $post->obra_nr_pagina?>">
                                <?= $post->obra_titulo ?>
                            </div>
                            <div class="livro-autor">AUTOR: <?= $post->auto_nome ?></div>
                            <div class="livro-autor">GÊNERO: <?= $post->gene_nome ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
?>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="livroModal" tabindex="-1" role="dialog" aria-labelledby="livroModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="livroModalLabel">DETALHES DO LIVRO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="livroModalImagem" class="card-img-top" alt="Imagem do Livro">
                    <h5 id="livroModalTitulo"></h5>
                    <p id="livroModalDescricao"></p>
                    <p id="livroModalEditora"></p>
                    <p id="livroModalAno"></p>
                    <p id="livroModalPagina"></p>
                </div>
                <div class="modal-footer">
            <button type="button" class="btn btn-success mx-auto" data-dismiss="modal">Fechar</button>
                </div>

            </div>
        </div>
    </div>

    

</div>
