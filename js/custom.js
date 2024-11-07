document.getElementById('favoritoBtn').addEventListener('click', function() {
    var favoritoIcon = document.getElementById('favoritoIcon');
    
    // Adiciona uma classe de animação
    favoritoIcon.classList.add('animacao-favorito');
    
    // Troca a imagem com um pequeno delay para o efeito de animação
    setTimeout(function() {
        if (favoritoIcon.src.includes('curtidos.svg')) {
            favoritoIcon.src = 'imgs/curtidosClicado.svg'; // Novo ícone de coração "preto"
        } else {
            favoritoIcon.src = 'imgs/curtidos.svg'; // Volta ao ícone original
        }
        // Remove a classe de animação depois da troca
        favoritoIcon.classList.remove('animacao-favorito');
    }, 300); // Tempo da animação (em ms)
});