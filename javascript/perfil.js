document.getElementById('logout').addEventListener('click', () => {
    Swal.fire({
        title: "Você deseja sair?",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim, sair",
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

document.getElementById('logout-mobile').addEventListener('click', () => {
    Swal.fire({
        title: "Você deseja sair?",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim, sair",
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


// MENUMOBILE

const btnMobile = document.getElementById('btn-mobile');

function toggleMenu(event) {
    if (event.type === 'touchstart') event.preventDefault();
    const nav = document.getElementById('nav');
    nav.classList.toggle('active');
    const active = nav.classList.contains('active');
    event.currentTarget.setAttribute('aria-expanded', active);
    if (active) {
        event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
    } else {
        event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
    }
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);

document.getElementById('btn-mobile').addEventListener('click', function () {
    const nav = document.getElementById('nav');
    const btn = document.getElementById('btn-mobile');

    nav.classList.toggle('active');

    // Atualizar o aria-expanded para acessibilidade
    const isExpanded = nav.classList.contains('active');
    btn.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
});
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

document.getElementById('voltar').addEventListener('click', () => {
    window.history.back();
})