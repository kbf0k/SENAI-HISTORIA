document.getElementById('logout').addEventListener('click', () => {
    Swal.fire({
        title: "Voce deseja sair?",
        text: "Você não poderá reverter isso!",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim, Sair",
        confirmButtonColor: "#4b3f35",
        backdrop: `rgba(0, 0, 0, 0.5)`
    }).then((result) => {
        if (result.isConfirmed) {
            fetch('logout.php', {
                method: 'POST'
            })
                .then(response => {
                    if (response.ok) {
                        window.location.href = "index.php";
                    }
                })
        }
    });
});

//carrossel 
let currentIndex = 0;

function scrollCarousel(direction) {
    const carousel = document.querySelector('.carousel');
    const totalEvents = document.querySelectorAll('.event').length;

    // Atualiza o índice atual baseado na direção do scroll
    currentIndex += direction;

    // Restringe o índice para o número total de eventos
    if (currentIndex < 0) {
        currentIndex = totalEvents - 1; // Vai para o último evento
    } else if (currentIndex >= totalEvents) {
        currentIndex = 0; // Volta para o primeiro evento
    }

    // Move o carrossel para o evento atual
    const offset = -currentIndex * 100; // 100% de largura do evento
    carousel.style.transform = `translateX(${offset}%)`;
}