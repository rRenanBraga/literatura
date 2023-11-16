<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/nav.css">
</head>
<body style="background-image: url('<?=URL?>/public/img/iimg.jpg'); background-size: cover; background-position: center;">
    

<header>   
<nav>



<div class = "formulario">  

        <form class="form" action="pesquisa.php" method="get">
        <label for="pesquisa">
        <input required="" autocomplete="off" placeholder="Pesquise" id="pesquisa" type="text" name="entry-search">
        <div class="icon">
            <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="swap-on">
                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
            <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="swap-off">
                <path d="M10 19l-7-7m0 0l7-7m-7 7h18" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
        </div>
        <button type="reset" class="close-btn">
            <svg viewBox="0 0 20 20" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" fill-rule="evenodd"></path>
            </svg>
        </button>
        </label>
        </form>   
</div> 
        <div class="nome">
        <img src="<?=URL?>/public/img/gif.gif" alt="LOGO">
        </div>


          <div class="text-left ">
          <div class="middle-items">
                <a href="<?=URL?>/app/Views/paginas/home">HOME</a>
                <a href="<?=URL?>/paginas/autor" data-tooltip="tooltip" title="autor">AUTORES</a>
            
            </div>
            </div>
       
        <div class="mobile-menu mr-30">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        
        <ul class="nav-list">
        <a href="<?=URL?>/paginas/sobre" data-tooltip="tooltip" title="Sobre nós">SOBRE O NÓS</a>
          <li><a href="<?=URL?>/paginas/livros" data-tooltip="tooltip" title="politica">LIVROS</a></li>

        </lu>  

    </nav>  
</header>

<main >


</main>
        <script src="<?=URL?>/public/js/carrosel.js"></script>
    </body>
</html>

    
