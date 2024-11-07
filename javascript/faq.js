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

document.querySelectorAll('.faq-item h3').forEach((question) => {
    question.addEventListener('click', () => {
        question.classList.toggle('active');
        const answer = question.nextElementSibling;
        if (question.classList.contains('active')) {
            answer.style.display = 'block';
        } else {
            answer.style.display = 'none';
        }
    });
});


