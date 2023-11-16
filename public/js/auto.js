document.addEventListener('DOMContentLoaded', function () {
    var autorLinks = document.querySelectorAll('.autor-link');

    autorLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            var descricao = link.getAttribute('data-descricao');
            var imagem = link.getAttribute('data-imagem');

            // Atualizar o conteúdo do modal com as informações do autor
            $('#modalImage').attr('src', imagem);
            $('#modalDescricao').text(descricao);

            // Exibir o modal
            $('#myModal').modal('show');
        });
    });

    var povoLinks = document.querySelectorAll('.povo-link');

    povoLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            var descricao = link.getAttribute('poin-descricao');
            var imagem = link.getAttribute('poin-imagem');

            // Atualizar o conteúdo do modal com as informações do povo indígena
            $('#modalImage').attr('src', imagem);
            $('#modalDescricao').text(descricao);

            // Exibir o modal
            $('#myModal').modal('show');
        });
    });
});