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
        $conceito = $result->fetch_assoc();
        echo json_encode($conceito);
    } else {
        echo json_encode(['erro' => 'Conceito não encontrado']);
    }

    $stmt->close();
}
$conexao->close();
?>
