<?php
include_once('conexao.php');
session_start();

// Verifique se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Obtendo os dados do formulário
    $titulo_glossario = $conexao->real_escape_string($_POST['termo']);
    $descricao_glossario = $conexao->real_escape_string($_POST['definicao']);

    // Inserção no banco de dados
    $sql = "INSERT INTO glossario (titulo_glossario, descricao_glossario) 
            VALUES ('$titulo_glossario', '$descricao_glossario')";

    if ($conexao->query($sql) === TRUE) {
        header("Location: glossario.php");
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }
}
?>
