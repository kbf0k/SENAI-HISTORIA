<?php
include_once('conexao.php');
session_start();

if(!isset($_SESSION['nome_sessao'])){
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Mobile</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
<header id="mobile-header">
    <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
        <span id="hamburger"></span>
    </button>
    <a id="mobile-logo" href="inicio.php"><img src="../img/Logo Nova Site História.png" class="logo" alt=""></a>
    <div class="user-options">
        <div class="user-vector">
            <?php if (isset($_SESSION['nome_sessao'])): ?>
                <img id="logo-vector" src="../img/user-vector.png" alt="Imagem do usuário">
                <div class="user-info">
                    <p><?= $_SESSION['nome_sessao'] ?></p>
                    <p><?= $_SESSION['tipo_sessao'] ?></p>
                </div>
            <?php endif; ?>
        </div>
        <?php if (isset($_SESSION['nome_sessao'])): ?>
            <a id="logout">SAIR</a>
        <?php else: ?>
            <a href="index.php">LOGIN</a>
        <?php endif; ?>
    </div>
    <nav id="nav">
        <ul id="mobile-menu" role="mobile-menu">
            <li><a href="pre_historia.php">Pré-História</a></li>
            <li><a href="idade_antiga.php">Idade Antiga</a></li>
            <li><a href="idade_media.php">Idade Média</a></li>
            <li><a href="idade_moderna.php">Idade Moderna</a></li>
            <li><a href="idade_contemporanea.php">Idade Contemporânea</a></li>
            <li><a href="glossario.php">Glossário</a></li>
            <li><a href="atividades.php">Atividades Complementares</a></li>
        </ul>
    </nav>
</header>

    
    
  <script src="./script.js"></script>
</body>

</html>