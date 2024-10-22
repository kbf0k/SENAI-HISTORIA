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
