document.getElementById('logout').addEventListener('click', () => {
    Swal.fire({
        title: "Você deseja sair?",
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
            console.log("Usuário confirmou a saída."); // Verifica se entra aqui
            fetch('logout.php', {
                method: 'POST'
            })
            .then(response => {
                console.log("Resposta do servidor:", response.status); // Exibe o status da resposta
                if (response.ok) {
                    window.location.href = "index.php";
                } else {
                    console.error("Erro ao tentar sair.");
                }
            })
            .catch(error => console.error("Erro na requisição de logout:", error));
        }
    });
});

const dropdownButtons = document.querySelectorAll('.dropdown-btn');

dropdownButtons.forEach(button => {
    button.addEventListener('click', function() {
       
        const dropdownContent = this.nextElementSibling;
        
       
        this.parentElement.classList.toggle('active');
        
  
        dropdownButtons.forEach(btn => {
            if (btn !== this) {
                btn.parentElement.classList.remove('active');
            }
        });
    });
});
