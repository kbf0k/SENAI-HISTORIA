<?php
include_once('conexao.php');
session_start();

if (!isset($_SESSION['nome_sessao'])) {
    header('Location: index.php');
    exit();
}

$letra = isset($_GET['letra']) ? $_GET['letra'] : 'A';

$sql = "SELECT * FROM glossario WHERE titulo_glossario LIKE '$letra%' ORDER BY titulo_glossario ASC";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while ($linha = $result->fetch_assoc()) {
        echo "<p class='conceitos'><b>" . $linha['titulo_glossario'] . ":</b> " . $linha['descricao_glossario'] . "</p>";
        if (isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === 'Administrador') {
            echo "<button class='botao-extra editar' data-id='" . $linha['id_glossario'] . "'>Editar</button>";
            echo "<button class='botao-extra excluir' data-id='" . $linha['id_glossario'] . "'>Excluir</button>";
        }
    }
} else {
    echo "<p>Nenhum termo encontrado para a letra $letra.</p>";
}
?>

<script>
    // Captura todos os botões de excluir
    const botoesExcluir = document.querySelectorAll('.botao-extra.excluir');

    botoesExcluir.forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');

            if (confirm('Tem certeza que deseja excluir este conceito?')) {
                // Envia a requisição AJAX para excluir o conceito
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'excluir_conceito.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        alert('Conceito excluído com sucesso!');
                        location.reload(); // Recarrega a página para refletir as mudanças
                    } else {
                        alert('Erro ao excluir o conceito.');
                    }
                };

                xhr.send('id_glossario=' + id);
            }
        });
    });
</script>

