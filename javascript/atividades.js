function mostrarOpcoes(opcoesId) {
    const opcoesDiv = document.getElementById(opcoesId);
    opcoesDiv.style.display = opcoesDiv.style.display === 'none' ? 'block' : 'none';
}

function baixarPDF(pdfPath, fileName) {
    const link = document.createElement('a');
    link.href = pdfPath; // Caminho do PDF
    link.download = fileName; // Nome do arquivo ao baixar
    document.body.appendChild(link);
    link.click(); // Simula o clique para iniciar o download
    document.body.removeChild(link); // Remove o link do DOM
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
