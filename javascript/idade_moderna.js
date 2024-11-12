document.getElementById('logout').addEventListener('click', () => {
    Swal.fire({
        title: "Voce deseja sair?",
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
document.getElementById('logout-mobile').addEventListener('click', () => {
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
document.getElementById('btn-mobile').addEventListener('click', function () {
    document.getElementById('nav').classList.toggle('active');
    this.classList.toggle('open'); // Adiciona classe para o botão hambúrguer
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
