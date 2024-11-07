<?php
include_once('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM glossario WHERE id_glossario = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        echo json_encode(['error' => 'Conceito não encontrado']);
    }
    $stmt->close();
}
?>
