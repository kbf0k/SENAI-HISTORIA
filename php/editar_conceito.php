<?php
include_once('conexao.php');
session_start();

if (!isset($_SESSION['nome_sessao']) || $_SESSION['tipo_sessao'] !== 'Administrador') {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_glossario = $_POST['id_glossario'];
    $titulo_glossario = $conexao->real_escape_string($_POST['termo']);
    $descricao_glossario = $conexao->real_escape_string($_POST['definicao']);

    $sql = "UPDATE glossario SET titulo_glossario = ?, descricao_glossario = ? WHERE id_glossario = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssi", $titulo_glossario, $descricao_glossario, $id_glossario);

    if ($stmt->execute()) {
        echo "Conceito atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o conceito: " . $conexao->error;
    }

    $stmt->close();
}
$conexao->close();
?>
