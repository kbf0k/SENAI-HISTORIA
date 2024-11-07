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
            // Formulário de exclusão
            echo "<a href='excluir.php?id_glossario=" . $linha['id_glossario'] . "'>
                <button class='botao-extra excluir'>Excluir</button>
                </a>";
        }
    }
} else {
    echo "<p>Nenhum termo encontrado para a letra $letra.</p>";
}

// Verifica se o botão de exclusão foi pressionado
if (isset($_POST['Excluir']) ) {
    $id_glossario = $_POST['id_glossario'];
    echo "teste";
    // Depuração - Verificando se o ID foi recebido corretamente
   

    // Exclui o registro do banco de dados
    $sql_delete = "DELETE FROM glossario WHERE id_glossario = ?";
    if ($stmt = $conexao->prepare($sql_delete)) {
        $stmt->bind_param("i", $id_glossario);
        echo "<p>ID do glossário a ser excluído: " . $id_glossario . "</p>"; // Exibe o ID para depuração
        if ($stmt->execute()) {
            
            echo "<p>Termo excluído com sucesso!</p>";
            // Redireciona para evitar reenvio do formulário após a atualização
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "<p>Erro ao excluir o termo.</p>";
        }
        $stmt->close();
    } else {
        echo "<p>Erro ao preparar a consulta.</p>";
    }
}
?>
