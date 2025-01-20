document.getElementById('logout-btn').addEventListener('click', function(event) {
    event.preventDefault(); // Impede o redirecionamento imediato

    // Mostra o spinner
    document.getElementById('spinner').style.display = 'block';

    // Adiciona a classe de animação ao corpo ou a outro elemento
    document.body.classList.add('fade-out');

    // Aguarda a animação terminar (1 segundo neste caso) antes de redirecionar
    setTimeout(function() {
        window.location.href = 'logout.php';
    }, 2000); // 1 segundo = 1000 milissegundos
});
