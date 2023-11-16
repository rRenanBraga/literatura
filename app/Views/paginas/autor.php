<!-- descricao_autores.php -->

<style>
    .autor-link,
    .povo-link {
        text-decoration: none; /* Remove o sublinhado */
        color: inherit; /* Mantém a cor padrão do texto */
        font-size: 20px; /* Ajusta o tamanho do texto conforme necessário */
    }

    .overlay {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .text {
        margin-top: -10px; /* Adiciona margem entre os elementos de texto */
    }

    /* Adicionei um novo estilo para posicionar o povo_nome abaixo do autor_nome */
    .poin-nome {
        margin-top: 30px; /* Ajuste conforme necessário */
    }

    .modal-body p {
        text-align: justify;
    }
</style>

<div class="container py-5">

    <script src="<?=URL?>/public/js/auto.js"></script>

    <link rel="stylesheet" type="text/css" href="<?= URL ?>/public/css/pagina.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Certifique-se de incluir o Bootstrap no seu projeto -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Certifique-se de incluir o Bootstrap JS no seu projeto -->

    <?= Sessao::mensagem('post') ?>
    <div class="card bg-light">
        <div class="autor-background" style="background-image: url('<?= URL ?>/public/img/fundo.jpg'); background-size: cover; background-position: center;  padding: 50px;">

            <?php foreach ($dados['posts'] as $post) : ?>
                
                <div class="container text-center" style="min-height: 350px;">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4">
                            <div class="conta">

                                <div class="image">
                                    <a href="#" data-toggle="modal" data-target="#myModal" data-descricao="<?= $post->auto_bibliografia ?>" data-imagem="<?= URL ?>/public/img/<?= $post->auto_imagem ?>" class="autor-link">
                                        <img class="card-img-top" src="<?= URL ?>/public/img/<?= $post->auto_imagem ?>" alt="Card image cap">
                                    </a>
                                </div>

                                <div class="overlay">
                                    <div class="text autor-nome">
                                        <a class="autor-link" data-descricao="<?= $post->auto_bibliografia ?>"  data-imagem="<?= URL ?>/public/img/<?= $post->auto_imagem ?>">
                                            <?= $post->auto_nome ?>
                                        </a>
                                    </div>
                                    <div class="text poin-nome">
                                        <a class="povo-link" poin-descricao="<?= $post->poin_descricao ?>"  poin-localidade="<?= $post->poin_localidade ?>" poin-imagem="<?= URL ?>/public/img/<?= $post->poin_imagem ?>">
                                            <?= $post->poin_nome ?>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img id="modalImage" class="img-fluid" alt="Imagem do Autor">
                <p id="modalDescricao"></p>
                <p id="modalLocalidade"></p>
            </div>
        </div>
    </div>
</div>


