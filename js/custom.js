// animação dos botões de favoritos

// Seleciona todos os botões de favorito com a mesma classe
const favoritoBtns = document.querySelectorAll('.favoritoBtn');
    
favoritoBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
        // Encontra a imagem dentro do botão clicado
        const favoritoIcon = btn.querySelector('.favoritoIcon');

        // Adiciona animação ao ícone
        favoritoIcon.classList.add('animacao-favorito');

        // Troca a imagem com um pequeno delay para o efeito de animação
        setTimeout(function() {
            if (favoritoIcon.src.includes('curtidos.svg')) {
                favoritoIcon.src = 'imgs/curtidosClicado.svg';
            } else {
                favoritoIcon.src = 'imgs/curtidos.svg';
            }
            // Remove a classe de animação após a troca
            favoritoIcon.classList.remove('animacao-favorito');
        }, 300); // Tempo da animação em ms
    });
});

// animação dos botões de carrinho

// Seleciona todos os botões de favorito com a mesma classe
const carrinhoBtns = document.querySelectorAll('.carrinhoBtn');
    
carrinhoBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
        // Encontra a imagem dentro do botão clicado
        const carrinhoIcon = btn.querySelector('.carrinhoIcon');

        // Adiciona animação ao ícone
        carrinhoIcon.classList.add('animacao-carrinho');

        // Troca a imagem com um pequeno delay para o efeito de animação
        setTimeout(function() {
            if (carrinhoIcon.src.includes('carrinho.svg')) {
                carrinhoIcon.src = 'imgs/carrinhoClicado.svg';
            } else {
                carrinhoIcon.src = 'imgs/carrinho.svg';
            }
            // Remove a classe de animação após a troca
            carrinhoIcon.classList.remove('animacao-carrinho');
        }, 300); // Tempo da animação em ms
    });
});