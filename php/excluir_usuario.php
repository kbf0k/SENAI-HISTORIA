<?php
include('conexao.php');
session_start();

if(isset($_SESSION['nome_sessao']) && $_SESSION['tipo_usuario'] == "Administrador"){
    $id_usuario = $_POST['id_usuario'];
    
    $stmt = $conexao->prepare('DELETE FROM usuarios WHERE id_usuario = ?');
    $stmt->bind_param('s',$id_usuario);
    $stmt->execute();

    if($stmt->num_rows>0){
        header('location: gerenciar_aluno.php');
    }
}
?>