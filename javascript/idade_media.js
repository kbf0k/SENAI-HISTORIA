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

// window.onload = animacao
let index = 0;

function move(direction) {
    const items = document.querySelectorAll('.item');
    const totalItems = items.length;
    index += direction;

    if (index < 0) {
        index = totalItems - 1;
    } else if (index >= totalItems) {
        index = 0;
    }

    const carrossel = document.querySelector('.carrossel');
    carrossel.style.transform = `translateX(-${index * 25}%)`;
}


const hamburguerButton = document.querySelector("#hamburguerButton");
const closeButton = document.querySelector("#closeButton");
const mobileMenu = document.querySelector("#mobileMenu");

hamburguerButton.addEventListener("click", function (){
    mobileMenu.classList.add("flex");
})

closeButton.addEventListener("click", function (){
    mobileMenu.classList.remove("flex");
})