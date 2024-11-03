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

document.querySelectorAll('.civilization-btn').forEach(button => {
    button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        const isVisible = content.style.display === 'block';

        document.querySelectorAll('.civilization-content').forEach(div => div.style.display = 'none');
        document.querySelectorAll('.civilization-btn').forEach(btn => btn.classList.remove('active'));

        if (!isVisible) {
            content.style.display = 'block';
            button.classList.add('active');
        } else {
            content.style.display = 'none';
        }
    });
});

