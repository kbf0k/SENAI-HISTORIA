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

document.querySelectorAll('.excluir').forEach(button => {
    button.addEventListener('click', () => {
        const userId = button.getAttribute('data-id'); // pega o id do usuário
        Swal.fire({
            title: "Você deseja excluir esse usuário?",
            text: "Você não poderá reverter isso!",
            icon: "warning",
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sim, Excluir",
            confirmButtonColor: "#4b3f35",
            backdrop: `rgba(0, 0, 0, 0.5)`
        }).then((result) => {
            if (result.isConfirmed) {
                fetch('excluir_usuario.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: `id_usuario=${userId}`
                })
                .then(response => {
                    if (response.ok) {
                        window.location.href = "gerenciar_alunos.php";
                    }
                })
            }
        });
    });
});


document.querySelectorAll('.editar').forEach(button => {
    button.addEventListener('click', async () => {
        const userId = button.getAttribute('data-id');
        const userNome = button.getAttribute('userNome');
        const userSobrenome = button.getAttribute('userSobrenome');
        const userEmail = button.getAttribute('userEmail');
        
        const { value: formValues } = await Swal.fire({
            title: "Editar Usuário",
            html: `
              <label>Nome:</label>  
              <input id="swal-input1" class="swal2-input" placeholder="${userNome}">
              <label>Sobrenome:</label>  
              <input id="swal-input2" class="swal2-input" placeholder="${userSobrenome}">
              <label>Tipo:</label>  
              <select id="swal-input3" style="width: 90%; font-size: 16px; padding: 5px; border-radius: 6px; border: 1px solid #4b3f35;">
                    <option value="administrador">Administrador</option>
                    <option value="aluno">Aluno</option>
                </select>
              <label>Email:</label>  
              <input id="swal-input4" class="swal2-input" placeholder="${userEmail}">
            `,
            confirmButtonText: "Salvar Alterações",
            cancelButtonText: "Cancelar",
            confirmButtonColor: "#4b3f35",
            cancelButtonColor: "#d33",
            showCancelButton: true,
            customClass: {
                container: 'swal-edit-container', // Classe customizada
                htmlContainer: 'swal-edit-html-container' // Classe customizada
            },
            preConfirm: () => {
                return [
                    document.getElementById("swal-input1").value,
                    document.getElementById("swal-input2").value,
                    document.getElementById("swal-input3").value,
                    document.getElementById("swal-input4").value
                ];
            }
        });

        if (formValues) {
            const [nome, sobrenome, tipo, email] = formValues;

            // Envio simplificado para o PHP
            fetch('editar_usuario.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ userId, nome, sobrenome, tipo, email })
            })
            .then(response => response.json())
            .then(data => {
                Swal.fire(data.success ? "Usuário atualizado com sucesso!" : "Erro ao atualizar o usuário.");
            })
            .catch(() => Swal.fire("Erro ao conectar com o servidor."));
        }
    });
});