<?php
include_once('conexao.php');
session_start();

if(!isset($_SESSION['nome_sessao'])){
    header('Location: index.php');
    exit();
}

// Verifica se a letra foi passada via GET
$letra = isset($_GET['letra']) ? $_GET['letra'] : 'A';  // Default para 'A' se não for fornecida

// Consulta SQL para pegar os termos que começam com a letra
$sql = "SELECT * FROM glossario WHERE titulo_glossario LIKE '$letra%' ORDER BY titulo_glossario ASC"; 
$result = $conexao->query($sql);

// Exibe os resultados
if ($result->num_rows > 0) {
    while ($linha = $result->fetch_assoc()) {
        echo "<p class='conceitos'><b>" . $linha['titulo_glossario'] . ":</b> " . $linha['descricao_glossario'] . "</p>";
    }
} else {
    echo "<p>Nenhum termo encontrado para a letra $letra.</p>";
}
?>
