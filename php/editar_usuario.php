<?php
include('conexao.php');
session_start();

$data = json_decode(file_get_contents("php://input"), true);

// Verifica se a sessão do usuário é do tipo "Administrador"
if ($_SESSION['tipo_sessao'] == "Administrador") {
    $id_usuario = $data['userId'];
    $nome = $data['nome'];
    $sobrenome = $data['sobrenome'];
    $tipo = $data['tipo'];
    $email = $data['email'];

    // Preparação e execução da query SQL
    $stmt = $conexao->prepare('UPDATE usuarios SET nome_usuario=?, sobrenome_usuario=?, tipo_usuario=?, email_usuario=? WHERE id_usuario = ?');
    $stmt->bind_param('ssssi', $nome, $sobrenome, $tipo, $email, $id_usuario);

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
