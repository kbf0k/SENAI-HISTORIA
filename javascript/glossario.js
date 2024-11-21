document.addEventListener("DOMContentLoaded", function () {
  carregarGlossario('A'); // Carrega inicialmente os conceitos que começam com 'A'
});

// Função para carregar o glossário com base na letra selecionada
function carregarGlossario(letra) {
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "glossario.php?letra=" + letra, true);
  xhr.onload = function () {
    if (xhr.status === 200) {
      document.getElementById('page-content').innerHTML = xhr.responseText;
    } else {
      console.error('Erro ao carregar o glossário');
    }
  };
  xhr.send();
}

document.querySelectorAll('.botao-extra editar').forEach(botao => {
  botao.addEventListener('click', () => {
    alert('teste');
  });
});

// Código para abrir e fechar o modal
const abrirModal = document.getElementById("abrirModal").addEventListener('click', () => {
  modal.style.display = "block";
});
const fecharModal = document.querySelector(".fechar").addEventListener('click', () => {
  modal.style.display = "none";
});

const modal = document.getElementById("modal");
const formNovoConceito = document.getElementById("formNovoConceito");



// EXCLUSAO// EXCLUSAO// EXCLUSAO// EXCLUSAO// EXCLUSAO// EXCLUSAO// EXCLUSAO// EXCLUSAO// EXCLUSAO// EXCLUSAO// EXCLUSAO

// Função para confirmar a exclusão
function confirmarExclusao(id) {
  if (confirm("Tem certeza que deseja excluir este conceito?")) {
    excluirConceito(id);
  }
}

// Função para excluir o conceito via AJAX
function excluirConceito(id) {
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "excluir_conceito.php?id=" + id, true);
  xhr.onload = function () {
    if (xhr.status === 200) {
      alert("Conceito excluído com sucesso!");
      location.reload();  // Atualiza a página para refletir a exclusão
    } else {
      alert("Erro ao excluir o conceito.");
    }
  };
  xhr.send();
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




// MENUMOBILE// MENUMOBILE// MENUMOBILE// MENUMOBILE// MENUMOBILE// MENUMOBILE// MENUMOBILE// MENUMOBILE// MENUMOBILE// MENUMOBILE// MENUMOBILE// MENUMOBILE// MENUMOBILE// MENUMOBILE

function toggleMenu() {
  document.querySelector('.menu').classList.toggle('show');
}

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