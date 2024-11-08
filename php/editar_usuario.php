<?php
include('conexao.php');
session_start();

$data = json_decode(file_get_contents("php://input"), true);

if (isset($_SESSION['nome_sessao']) && $_SESSION['tipo_usuario'] == "Administrador") {
    $id_usuario = $data['userId'];
    $nome = $data['nome'];
    $sobrenome = $data['sobrenome'];
    $tipo = $data['tipo'];
    $email = $data['email'];

    $stmt = $conexao->prepare('UPDATE usuarios SET nome_usuario=?,sobrenome_usuario=?,tipo_usuario=?,email_usuario=? WHERE id_usuario = ?');
    $stmt->bind_param('ssssi', $nome, $sobrenome, $tipo, $email, $id_usuario);
    $stmt->execute();

    // Retorna um JSON de resposta
    echo json_encode(['success' => $stmt->affected_rows > 0]);
}
