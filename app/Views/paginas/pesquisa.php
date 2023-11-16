<div class="container py-5">
    <?= Sessao::mensagem('post') ?>
    <div class="card bg-light">
        <div class="card-header bg-info text-white">
           PESQUISA
        </div>
        <?php
        if (isset($dados['livros']) && is_array($dados['livros'])) {

            $livros = $dados['livros'];
            // Divida os livros em arrays de 4 em 4
            $chunks = array_chunk($livros, 4);
            // Itera sobre cada conjunto de 4 livros
            foreach ($chunks as $chunk) :
        ?>
            <div class="row">
                <?php foreach ($chunk as $livro) : ?>
                    <div class="col-md-3 mb-4">
                        <p class="card-text"><small class="text-muted"><?= $livro->obra_titulo ?></small></p>
                        <p class="card-text"><small class="text-muted"><?= $livro->gene_nome ?></small></p>
                        <p class="card-text"><small class="text-muted"><?= $livro->auto_nome ?></small></p>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
        <?php } else { ?>
            <p>Nenhum resultado encontrado.</p>
        <?php } ?>
    </div>
</div>
