<div class="container-md">
    <div class="card">

    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/pagina.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

        <div class="card-body">
          <!--  <h1 class="my-3 text-center"><?= $dados['titulo'] ?></h1> -->

           <!-- <p><b>Um pouco sobre literatura indigena.</b></p> -->


           <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
         new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>

           <div class="aviso text-center">
           <img src="<?=URL?>/public\img\aviso.png" alt="AVISO" style="width: 600px; height: 700px; margin-bottom: 70px;">
           </div>
           
           
        <div class="destaque-legenda">
            
            <span class="linha1"></span>
            <span class="texto1" style="font-family: fantasy  sans-serif; font-size:20px;">DESTAQUE</span>
            <span class="linha1"></span>
           
        </div>
        <div class="frase-destaque1">
             VEJA O QUE PREPARAMOS PARA VOCÊ
        </div>

           
           
           <div class="carousel-container mx-auto mt-4">
            <!-- IMAGEM DE CIMA DO CARROSEL -->
           <div class="imagem-lateral">
           <img src="<?=URL?>/public/img/LATERAL.jpg" alt="Imagem 1" style="width: 600px; height: 100px;">
           </div>
               <!-- FIM DA IMAGEM DE CIMA -->

           <!-- INICIO DO CARROSEL -->

           <?= Sessao::mensagem('post') ?>
<div class="card bg-light">
    <?php $posts = $dados['posts']; ?>
    <div class="carousel" id="carousel">
        <?php foreach ($posts as $post) : ?>   
            <img class="livro card-img-top" src="<?= URL?>/public/img/<?= $post->obra_imagem?>" >
        <?php endforeach ?>
    </div>
</div>
            
          <!-- FIM DO CARROSEL -->

           <!-- IMAGEM DE CIMA DO CARROSEL -->
            <div class="imagem-lateral">
            <img src="<?=URL?>/public/img/LATERAL.jpg" alt="Imagem 1" style="width: 400px; height: 100px; margin-bottom: 70px;">
            </div>
</div>
          <!-- FIM DA IMAGEM DE CIMA -->

    
        
              </li>
                <script src="<?=URL?>/public/js/home.js"></script>
            </ul>
     
        </div>
    </div>
</div>

