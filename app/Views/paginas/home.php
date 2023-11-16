<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Título Aqui</title>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/pagina.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <style>
        /* Adicione seus estilos personalizados aqui */
        <style>
    /* Restante do seu CSS */

    .card {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .card img {
        width: 100%; /* Alterado para 100% para garantir que todas as imagens tenham o mesmo tamanho */
        height: auto;
        margin-bottom: 10px; /* Espaço entre a imagem e o título */
    }

    .card-body {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .card-text {
        font-size: 14px;
        text-align: justify;
    }
</style>
</head>
<body>

<div class="container-md">
    <div class="card">
        <div class="card-body">
            <div vw class="enabled">
                <!-- Seu código para a VLibras aqui -->
            </div>

            <div class="aviso text-center">
    <img src="<?=URL?>/public\img\aviso.png" alt="AVISO" class="img-fluid w-50">
            </div>

            <div class="destaque-legenda">
                <span class="linha1"></span>
                <span class="texto1">DESTAQUE</span>
                <span class="linha1"></span>
            </div>
            <div class="frase-destaque1">
                VEJA O QUE PREPARAMOS PARA VOCÊ
            </div>

            <div class="row">
                <?= Sessao::mensagem('post') ?>
                <?php $posts = $dados['posts']; ?>
                <?php foreach ($posts as $post) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="<?= URL?>/public/img/<?= $post->obra_imagem?>" alt="Capa do Livro" style="height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $post->obra_titulo ?></h5>
                                <p class="card-text"><?= $post->obra_descricao ?></p>
                                <!-- Adicione mais campos conforme necessário -->
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

            <!-- Adicione aqui mais conteúdo ou seções conforme necessário -->

        </div>
    </div>
</div>

<!-- Adicione mais scripts ou links necessários aqui -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="<?=URL?>/public/js/home.js"></script>

</body>
</html>
