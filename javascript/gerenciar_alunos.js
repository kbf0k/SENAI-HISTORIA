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
                // Aqui você precisará ajustar para direcionar ao script correto para excluir o usuário
                // Exemplo: fetch('excluir.php', { method: 'POST', body: JSON.stringify({ userId: userId }) })
            }
        });
    });
});