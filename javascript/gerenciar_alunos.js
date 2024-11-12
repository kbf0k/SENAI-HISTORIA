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
            confirmButtonText: "Sim, excluir",
            confirmButtonColor: "#4b3f35",
            backdrop: `rgba(0, 0, 0, 0.5)`
        }).then((result) => {
            if (result.isConfirmed) {
                fetch('excluir_usuario.php', {
                    method: 'POST', // Mantemos o POST por enquanto
                    headers: { 
                        'Content-Type': 'application/json' 
                    },
                    body: JSON.stringify({ userId })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erro na requisição');
                    }
                    return response.json(); // Converte a resposta para JSON
                })
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: "Usuário excluído",
                            text: "O usuário foi excluído com sucesso.",
                            icon: "success",
                            confirmButtonColor: "#4b3f35"
                        }).then(() => {
                            window.location.href = "gerenciar_alunos.php"; // Redireciona para a página de gerenciamento
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


document.querySelectorAll('.editar').forEach(button => {
    button.addEventListener('click', async () => {
        const userId = button.getAttribute('data-id');
        const userNome = button.getAttribute('userNome');
        const userSobrenome = button.getAttribute('userSobrenome');
        const userEmail = button.getAttribute('userEmail');
        const userTipo = button.getAttribute('userTipo');

        const { value: formValues } = await Swal.fire({
            title: "Editar Usuário",
            html: `
                <label>Nome:</label>  
                <input id="swal-input1" class="swal2-input" value="${userNome}">
                <label>Sobrenome:</label>  
                <input id="swal-input2" class="swal2-input" value="${userSobrenome}">
                <label>Tipo:</label>  
                <select id="swal-input3" style="width: 90%; font-size: 16px; padding: 5px; border-radius: 6px; border: 1px solid #4b3f35;">
                    <option value="administrador" ${userTipo === 'administrador' ? 'selected' : ''}>Administrador</option>
                    <option value="aluno" ${userTipo === 'aluno' ? 'selected' : ''}>Aluno</option>
                </select>
                <label>Email:</label>  
                <input id="swal-input4" class="swal2-input" value="${userEmail}">
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
                    document.getElementById("swal-input3").value,
                    document.getElementById("swal-input4").value
                ];
            }
        });

        if (formValues) {
            const [nome, sobrenome, tipo, email] = formValues;

            // Envio para o PHP
            fetch('editar_usuario.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ userId, nome, sobrenome, tipo, email })
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
                        title: "Usuário editado!",
                        text: "O usuário foi editado com sucesso.",
                        icon: "success",
                        confirmButtonColor: "#4b3f35"
                    }).then(() => {
                        window.location.href = "gerenciar_alunos.php"; // Redireciona para a página de gerenciamento
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