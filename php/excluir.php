<?php
include_once('conexao.php');
session_start();

if (!isset($_SESSION['nome_sessao'])) {
    header('Location: index.php');
    exit();
}

// Verifica se o ID do glossário foi passado
if (isset($_GET['id_glossario'])) {
    $id_glossario = $_GET['id_glossario'];

    // Exclui o registro do banco de dados
    $sql_delete = "DELETE FROM glossario WHERE id_glossario = ?";
    if ($stmt = $conexao->prepare($sql_delete)) {
        $stmt->bind_param("i", $id_glossario);
        
        if ($stmt->execute()) {
            // Excluiu com sucesso
            echo "<p>Termo excluído com sucesso!</p>";
        } else {
            // Erro ao excluir
            echo "<p>Erro ao excluir o termo.</p>";
        }
        $stmt->close();
    } else {
        echo "<p>Erro ao preparar a consulta.</p>";
    }
} else {
    echo "<p>ID do glossário não especificado.</p>";
}

// Redireciona de volta para a página principal após a exclusão
header('Location: glossario.php');
exit();
?>
