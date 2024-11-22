<?php
include_once('conexao.php');
session_start();

$data = json_decode(file_get_contents("php://input"), true);

// Verifica se a sessão do usuário é do tipo "Administrador"
if ($_SESSION['tipo_sessao'] == "Administrador") {
    $termo_id = $data['termo_id'];
    $termo_titulo = $data['termo_titulo'];
    $termo_descricao = $data['termo_descricao'];


    // Preparação e execução da query SQL
    $stmt = $conexao->prepare('UPDATE glossario SET titulo_glossario=?, descricao_glossario=? WHERE id_glossario = ?');
    $stmt->bind_param('ssi', $termo_titulo, $termo_descricao, $termo_id);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }
    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Permissão negada']);
}
