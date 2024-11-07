<?php
include_once('conexao.php');
session_start();

// Verifica se o usuário está autenticado e é administrador
if (!isset($_SESSION['nome_sessao']) || $_SESSION['tipo_sessao'] !== 'Administrador') {
    header('Location: index.php');
    exit();
}

// Verifica se o ID do conceito foi passado
if (isset($_POST['id_glossario'])) {
    $id_glossario = $_POST['id_glossario'];

    // Prepara e executa a consulta para excluir o conceito
    $sql = "DELETE FROM glossario WHERE id_glossario = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id_glossario);

    if ($stmt->execute()) {
        echo "Conceito excluído com sucesso!";
    } else {
        echo "Erro ao excluir o conceito: " . $conexao->error;
    }

    $stmt->close();
}
$conexao->close();
?>
