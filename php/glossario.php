<?php
include_once('conexao.php');
session_start();

if(!isset($_SESSION['nome_sessao'])){
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/glossario.css">
    <script src="../javascript/glossario.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>

</head>
<title>Glossário</title>
</head>

<body>
    <header class="header">
        <div class="container logo-menu">
            <div class="logo">
                <a href="inicio.php"><img src="../img/LOGO-HISTORIA-INICIO-SEM-FUNDO.png" alt="Logo"></a>
                <h1>Glossário</h1>
            </div>
            <nav class="menu">
                <ul>
                    <li class="dropdown">
                        <a href="">Períodos Históricos</a>

                        <div class="dropdown-menu">
                            <a href="">Pré-História</a>
                            <a href="idade_antiga.php">Idade Antiga</a>
                            <a href="idade_media.php">Idade Média</a>
                            <a href="idade_moderna.php">Idade Moderna</a>
                            <a href="../html/idade_contemporanea.html">Idade Contemporânea</a>
                        </div>
                    </li>
                    <li><a href="../html/glossario.html">Glossário</a></li>
                    <li><a href="atividades.php">Atividades Complementares</a></li>

                    <?php if (isset($_SESSION['nome_sessao'])): ?>
                    <div class="user-vector">
                        <img id="logo-vector" src="../img/user-vector.png" alt="">
                        <p>
                            <?= $_SESSION['nome_sessao'] ?>
                        </p>
                        <p>
                            <?=$_SESSION['tipo_sessao'] ?>
                        </p>
                    </div>
                    <li><a id="logout">SAIR</a></li>
                    <?php else: ?>
                    <li><a href="index.php">LOGIN</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

  <div class="search-bar">
    <form action="" method="post">
        <input type="text" name="termo" id="barra-pesquisa" placeholder="Que termo você procura?">
    </form>
    <button type="submit">
      <img id="botao-pesquisa" src="../img/lupa_glossario.png" alt="Buscar">
    </button>
  </div>

  <p class="search-hint">O uso de acentos e caracteres especiais não interfere no resultado de busca.</p>

  <div class="alphabet-container">
    <!-- Alfabeto de A a Z -->
    <a class="botaoABC" id="botaoA" href="#">A</a>
    <a class="botaoABC" id="botaoB" href="#">B</a>
    <a class="botaoABC" id="botaoC" href="#">C</a>
    <a class="botaoABC" id="botaoD" href="#">D</a>
    <a class="botaoABC" id="botaoE" href="#">E</a>
    <a class="botaoABC" id="botaoF" href="#">F</a>
    <a class="botaoABC" id="botaoG" href="#">G</a>
    <a class="botaoABC" id="botaoH" href="#">H</a>
    <a class="botaoABC" id="botaoI" href="#">I</a>
    <a class="botaoABC" id="botaoJ" href="#">J</a>
    <a class="botaoABC" id="botaoK" href="#">K</a>
    <a class="botaoABC" id="botaoL" href="#">L</a>
    <a class="botaoABC" id="botaoM" href="#">M</a>
    <a class="botaoABC" id="botaoN" href="#">N</a>
    <a class="botaoABC" id="botaoO" href="#">O</a>
    <a class="botaoABC" id="botaoP" href="#">P</a>
    <a class="botaoABC" id="botaoQ" href="#">Q</a>
    <a class="botaoABC" id="botaoR" href="#">R</a>
    <a class="botaoABC" id="botaoS" href="#">S</a>
    <a class="botaoABC" id="botaoT" href="#">T</a>
    <a class="botaoABC" id="botaoU" href="#">U</a>
    <a class="botaoABC" id="botaoV" href="#">V</a>
    <a class="botaoABC" id="botaoW" href="#">W</a>
    <a class="botaoABC" id="botaoX" href="#">X</a>
    <a class="botaoABC" id="botaoY" href="#">Y</a>
    <a class="botaoABC" id="botaoZ" href="#">Z</a>
  </div>

  <div class="page-content" id="page-content">
    <!-- Conteúdo inicial da página 1 -->
  </div>

  <div class="pagination" id="navPags">
    <a href="#" data-page="1" id="inicio">&laquo; Início</a>
    <a href="#" data-page="prev" id="anterior">&lsaquo; Anterior</a>
    <!-- Botões de páginas serão gerados dinamicamente -->
    <a href="#" data-page="next" id="proximo">Próximo &rsaquo;</a>

    <a href="#" data-page="15" id="fim">Fim &raquo;</a>
  </div>

  <div id="navLetras"></div>

</body>
</html>