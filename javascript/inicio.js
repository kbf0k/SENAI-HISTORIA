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

// Função para observar os elementos e adicionar a classe 'is-visible' quando visíveis
const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target); // Para de observar o elemento depois que ele se tornou visível
        }
    });
}, {
    threshold: 0.5
});

const animatedElements = document.querySelectorAll('.animated-title, .animated-subtitle, .animated-btn, .animated-cards, .linha-do-tempo .evento, .atividades .atividade, .glossario');

animatedElements.forEach(element => {
    observer.observe(element);
});

function toggleMenu() {
    document.querySelector('.menu').classList.toggle('show');
}

