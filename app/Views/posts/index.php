<div class="container py-5">
    <?= Sessao::mensagem('post') ?>
    <div class="card bg-light">
        <div class="card-header bg-info text-white">
            POSTAGENS
            <div class="float-right">
                <a href="<?= URL ?>/posts/cadastrar" class="btn btn-light">Escrever</a>
            </div>
        </div>
        <div class="card-body">
            <?php foreach ($dados['posts'] as $post) : ?>
                <div class="card m-3">
                    <div class="card-header bg-secondary text-white font-weight-bold">
                    <?= $post->titulo ?>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?= $post->texto ?></p>
                        <a href="<?= URL.'/posts/ver/'.$post->postId ?>" class="btn btn-sm btn-outline-info float-right">Ler mais...</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small>Escrito por: <?= $post->nome ?> em <?=Checa::dataBr($post->postDataCadastro) ?></small>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
    </div>


</div>