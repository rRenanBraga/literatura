
    document.addEventListener('DOMContentLoaded', function () {
        var livroImagens = document.querySelectorAll('.livro img');

        livroImagens.forEach(function (imagem) {
            imagem.addEventListener('click', function () {
                var livroTitulo = imagem.nextElementSibling.getAttribute('data-titulo');
                var descricao = imagem.nextElementSibling.getAttribute('data-descricao');
                var editora = imagem.nextElementSibling.getAttribute('data-editora');
                var ano = imagem.nextElementSibling.getAttribute('data-ano');
                var pagina = imagem.nextElementSibling.getAttribute('data-pagina');
                var imagemSrc = imagem.getAttribute('src');

                // Atualizar o conteúdo do modal com as informações do livro
                $('#livroModalImagem').attr('src', imagemSrc);
                $('#livroModalTitulo').text(livroTitulo);
                $('#livroModalDescricao').text(descricao);
                $('#livroModalEditora').text('Editora: ' + editora);
                $('#livroModalAno').text('Ano publicado: ' + ano);
                $('#livroModalPagina').text('Páginas: ' + pagina);

                // Exibir o modal
                $('#livroModal').modal('show');
            });
        });
    });
