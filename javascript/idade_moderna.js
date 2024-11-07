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

let currentIndex = 0;

const items = document.querySelectorAll('.carrossel .item');
const totalItems = items.length;

function move(direction) {
    // Atualiza o índice atual com base na direção
    currentIndex += direction;

    // Garante que o índice fique dentro do intervalo dos itens
    if (currentIndex < 0) {
        currentIndex = totalItems - 1; // Vai para o último item se estiver no primeiro
    } else if (currentIndex >= totalItems) {
        currentIndex = 0; // Vai para o primeiro item se estiver no último
    }

    // Move o carrossel para o item correto
    const newTransformValue = -100 * currentIndex + '%'; // Desloca o carrossel para o índice atual
    document.querySelector('.carrossel').style.transform = `translateX(${newTransformValue})`;
}

const video = document.getElementById('meuVideo');

        // Define o tempo inicial do vídeo (em segundos) que você quer que comece
        const tempoInicial = 80; // Início aos 30 segundos
        const tempoFinal = 110; // Finaliza aos 60 segundos

        video.currentTime = tempoInicial; // Começa no tempo inicial

        // Quando o vídeo atingir o tempo final, ele vai parar ou voltar para o início
        video.addEventListener('timeupdate', function () {
            if (video.currentTime >= tempoFinal) {
                video.currentTime = tempoInicial; // Reseta para o tempo inicial
            }
        });

        function toggleMenu() {
            const navList = document.querySelector('.menu .nav-list');
            navList.classList.toggle('active');  // Alterna a visibilidade do menu
        }
        