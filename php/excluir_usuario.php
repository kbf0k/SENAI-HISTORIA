<?php
include('conexao.php');
session_start();

header('Content-Type: application/json'); // Adicione este header para garantir que a resposta seja em JSON

$data = json_decode(file_get_contents("php://input"), true);

// Verifica se o usuário está logado como administrador
if ($_SESSION['tipo_sessao'] == "Administrador") {
    $id_usuario = $data['userId'];

    // Prepara a query para deletar o usuário
    $stmt = $conexao->prepare('DELETE FROM usuarios WHERE id_usuario = ?');
    $stmt->bind_param('i', $id_usuario);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Permissão negada']);
}
?>
