document.querySelectorAll('.botao-inserir').forEach(button => {
  button.addEventListener('click', async () => {
    const termo_id = button.getAttribute('termo_id');
    const termo_titulo = button.getAttribute('termo_titulo');
    const termo_descricao = button.getAttribute('termo_descricao');

    const { value: formValues } = await Swal.fire({
      title: "Inserir Conceito Histórico",
      html: `
              <label>Termo:</label>  
              <input id="swal-input1" class="swal2-input" value="">
              <label>Definição:</label>  
              <textarea id="swal-input2" class="swal2-input"></textarea>
          `,
      confirmButtonText: "Salvar Alterações",
      cancelButtonText: "Cancelar",
      confirmButtonColor: "#4b3f35",
      cancelButtonColor: "#d33",
      showCancelButton: true,
      customClass: {
        container: 'swal-edit-container',
        htmlContainer: 'swal-edit-html-container'
      },
      preConfirm: () => {
        return [
          document.getElementById("swal-input1").value,
          document.getElementById("swal-input2").value,
        ];
      }
    });

    if (formValues) {
      const [termo_titulo, termo_descricao] = formValues;

      // Envio para o PHP
      fetch('inserir_conceito.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ termo_id, termo_titulo, termo_descricao })
      })
        .then(response => {
          if (!response.ok) {
            throw new Error("Erro de rede ou servidor");
          }
          return response.json();
        })
        .then(data => {
          if (data.success) {
            Swal.fire({
              title: "Termo adicionado!",
              text: "O termo foi adicionado com sucesso.",
              icon: "success",
              confirmButtonColor: "#4b3f35"
            }).then(() => {
              window.location.reload();
            });
          } else {
            Swal.fire({
              title: "Erro ao adicionar",
              text: data.error || "Erro desconhecido",
              icon: "error",
              confirmButtonColor: "#d33"
            });
          }
        })
        .catch(error => Swal.fire("Erro ao conectar com o servidor: " + error.message));
    }
  });
});

// MODAL DE EDITAR// MODAL DE EDITAR// MODAL DE EDITAR// MODAL DE EDITAR// MODAL DE EDITAR// MODAL DE EDITAR// MODAL DE EDITAR// MODAL DE EDITAR// MODAL DE EDITAR

document.querySelectorAll('.botao-extra.editar').forEach(button => {
  button.addEventListener('click', async () => {
    const termo_id = button.getAttribute('termo_id');
    const termo_titulo = button.getAttribute('termo_titulo');
    const termo_descricao = button.getAttribute('termo_descricao');

    const { value: formValues } = await Swal.fire({
      title: "Editar Conceito Histórico",
      html: `
              <label>Termo:</label>  
              <input id="swal-input1" class="swal2-input" value="${termo_titulo}">
              <label>Definição:</label>  
              <textarea id="swal-input2" class="swal2-input">${termo_descricao}</textarea>
          `,
      confirmButtonText: "Salvar Alterações",
      cancelButtonText: "Cancelar",
      confirmButtonColor: "#4b3f35",
      cancelButtonColor: "#d33",
      showCancelButton: true,
      customClass: {
        container: 'swal-edit-container',
        htmlContainer: 'swal-edit-html-container'
      },
      preConfirm: () => {
        return [
          document.getElementById("swal-input1").value,
          document.getElementById("swal-input2").value,
        ];
      }
    });

    if (formValues) {
      const [termo_titulo, termo_descricao] = formValues;

      // Envio para o PHP
      fetch('editar_conceito.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ termo_id, termo_titulo, termo_descricao })
      })
        .then(response => {
          if (!response.ok) {
            throw new Error("Erro de rede ou servidor");
          }
          return response.json();
        })
        .then(data => {
          if (data.success) {
            Swal.fire({
              title: "Termo editado!",
              text: "O Termo foi editado com sucesso.",
              icon: "success",
              confirmButtonColor: "#4b3f35"
            }).then(() => {
              window.location.reload();
            });
          } else {
            Swal.fire({
              title: "Erro ao editar",
              text: data.error || "Erro desconhecido",
              icon: "error",
              confirmButtonColor: "#d33"
            });
          }
        })
        .catch(error => Swal.fire("Erro ao conectar com o servidor: " + error.message));
    }
  });
});

// MODAL DE EXCLUIR// MODAL DE EXCLUIR// MODAL DE EXCLUIR// MODAL DE EXCLUIR// MODAL DE EXCLUIR// MODAL DE EXCLUIR// MODAL DE EXCLUIR// MODAL DE EXCLUIR

document.querySelectorAll('.botao-extra.excluir').forEach(button => {
  button.addEventListener('click', () => {
    const termo_id = button.getAttribute('termo_id');
    Swal.fire({
      title: "Você deseja excluir esse termo?",
      text: "Você não poderá reverter isso!",
      icon: "warning",
      showCancelButton: true,
      cancelButtonText: "Cancelar",
      cancelButtonColor: "#d33",
      confirmButtonText: "Sim, excluir",
      confirmButtonColor: "#4b3f35",
      backdrop: `rgba(0, 0, 0, 0.5)`
    }).then((result) => {
      if (result.isConfirmed) {
        fetch('excluir.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ termo_id })
        })
          .then(response => {
            if (!response.ok) {
              throw new Error('Erro na requisição');
            }
            return response.json();
          })
          .then(data => {
            if (data.success) {
              Swal.fire({
                title: "Termo excluído",
                text: "O Termo foi excluído com sucesso.",
                icon: "success",
                confirmButtonColor: "#4b3f35"
              }).then(() => {
                window.location.reload();
              });
            } else {
              Swal.fire({
                title: "Erro ao excluir",
                text: data.error || "Erro desconhecido",
                icon: "error",
                confirmButtonColor: "#d33"
              });
            }
          })
          .catch(error => {
            Swal.fire({
              title: "Erro na requisição",
              text: "Não foi possível conectar ao servidor. Tente novamente mais tarde.",
              icon: "error",
              confirmButtonColor: "#d33"
            });
          });
      }
    });
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


// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT// LOGOUT

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