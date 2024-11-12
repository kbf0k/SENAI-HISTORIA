document.getElementById('logout').addEventListener('click', () => {
    Swal.fire({
        title: "Voce deseja sair?",
        text: "Você não poderá reverter isso!",
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
  
  
  
  
  
  
  
  
  
  
  document.addEventListener("DOMContentLoaded", function() {
    carregarGlossario('A'); // Carrega inicialmente os conceitos que começam com 'A'
  });
  
  // Função para carregar o glossário com base na letra selecionada
  function carregarGlossario(letra) {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "consultar_glossario.php?letra=" + letra, true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            document.getElementById('page-content').innerHTML = xhr.responseText;
            adicionarEventosEditar(); // Adiciona eventos para os botões de edição
        } else {
            console.error('Erro ao carregar o glossário');
        }
    };
    xhr.send();
  }
  
  // Função para adicionar eventos nos botões de edição
  function adicionarEventosEditar() {
    const botoesEditar = document.querySelectorAll('.editar');
    botoesEditar.forEach(botao => {
        botao.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            abrirModalEdicao(id);
        });
    });
  }
  
  // Função para abrir o modal de edição com dados do conceito
  function abrirModalEdicao(id) {
    // Faz uma requisição para obter os dados do conceito
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "obter_conceito.php?id=" + id, true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            const conceito = JSON.parse(xhr.responseText);
            document.getElementById("termo").value = conceito.titulo_glossario;
            document.getElementById("definicao").value = conceito.descricao_glossario;
            document.getElementById("id_glossario").value = conceito.id_glossario; // Campo oculto para o ID
            modal.style.display = "block";
        } else {
            console.error('Erro ao carregar o conceito para edição');
        }
    };
    xhr.send();
  }
  
  // Código para abrir e fechar o modal
  const abrirModal = document.getElementById("abrirModal");
  const modal = document.getElementById("modal");
  const fecharModal = document.querySelector(".fechar");
  const formNovoConceito = document.getElementById("formNovoConceito");
  
  abrirModal.addEventListener("click", function() {
    modal.style.display = "block";
  });
  
  fecharModal.addEventListener("click", function() {
    modal.style.display = "none";
  });
  
  window.addEventListener("click", function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });
  
  // Função para enviar o formulário via AJAX
  formNovoConceito.addEventListener("submit", function(event) {
    event.preventDefault();
  
    // Captura os valores dos campos de entrada
    const termo = document.getElementById("termo").value;
    const definicao = document.getElementById("definicao").value;
    const id_glossario = document.getElementById("id_glossario").value;
  
    const xhr = new XMLHttpRequest();
    const url = id_glossario ? "editar_conceito.php" : "inserir_conceito.php";
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
      if (xhr.status === 200) {
        alert(xhr.responseText);
        modal.style.display = "none";
        carregarGlossario(termo.charAt(0).toUpperCase()); // Atualiza a lista com a letra inicial do conceito
      } else {
        alert("Erro ao salvar o conceito.");
      }
    };
    xhr.send(`termo=${encodeURIComponent(termo)}&definicao=${encodeURIComponent(definicao)}&id_glossario=${id_glossario}`);
  });
  
  
  
  document.addEventListener("DOMContentLoaded", function () {
    // Carrega os dados do conceito quando o botão de editar é clicado
    const editarButtons = document.querySelectorAll('.editar');
  
    editarButtons.forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            carregarConceitoParaEditar(id);
        });
    });
  });
  
  // Função para carregar o conceito no modal de edição
  function carregarConceitoParaEditar(id) {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "get_conceito.php?id=" + id, true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            const conceito = JSON.parse(xhr.responseText);
            document.getElementById('termo').value = conceito.titulo_glossario;
            document.getElementById('definicao').value = conceito.descricao_glossario;
            document.getElementById('id_glossario').value = conceito.id_glossario;
            modal.style.display = "block"; // Mostra o modal
        } else {
            alert("Erro ao carregar o conceito para edição.");
        }
    };
    xhr.send();
  }
  
  
  
  
  
  
  
  document.addEventListener("DOMContentLoaded", function () {
    // Evento para o botão de editar
    const editarButtons = document.querySelectorAll('.editar');
    editarButtons.forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            carregarConceitoParaEditar(id);
        });
    });
  
    // Evento para o botão de excluir
    const excluirButtons = document.querySelectorAll('.excluir');
    excluirButtons.forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            confirmarExclusao(id);
        });
    });
  });
  
  // Função para carregar o conceito no modal de edição
  function carregarConceitoParaEditar(id) {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "get_conceito.php?id=" + id, true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            const conceito = JSON.parse(xhr.responseText);
            document.getElementById('termo').value = conceito.titulo_glossario;
            document.getElementById('definicao').value = conceito.descricao_glossario;
            document.getElementById('id_glossario').value = conceito.id_glossario;
            modal.style.display = "block"; // Mostra o modal
        } else {
            alert("Erro ao carregar o conceito para edição.");
        }
    };
    xhr.send();
  }
  
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