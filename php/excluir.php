<?php
include_once('conexao.php');
session_start();

if (!isset($_SESSION['nome_sessao'])) {
    header('Location: index.php');
    exit();
}

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);

if ($_SESSION['tipo_sessao'] == 'Administrador') {
    $id_glossario = $data['termo_id'];

    $stmt = $conexao->prepare('DELETE FROM glossario WHERE id_glossario = ?');
    $stmt->bind_param('i', $id_glossario);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }
    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Permissão Negada']);
}
