<?php
include_once('conexao.php');
session_start();

$data = json_decode(file_get_contents("php://input"), true);

// Verifica se a sessão do usuário é do tipo "Administrador"
if ($_SESSION['tipo_sessao'] == "Administrador") {
    $termo_titulo = $data['termo_titulo'];
    $termo_descricao = $data['termo_descricao'];


    // Preparação e execução da query SQL
    $stmt = $conexao->prepare('INSERT INTO glossario (titulo_glossario,descricao_glossario) VALUES(?,?)');
    $stmt->bind_param('ss', $termo_titulo, $termo_descricao);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }
    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Permissão negada']);
}
