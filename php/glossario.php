<?php
include_once('conexao.php');
session_start();



if(!isset($_SESSION['nome_sessao'])){
    header('Location: index.php');
    exit();
}

// $sql = "SELECT * FROM glossario ORDER BY titulo_glossario ASC LIMIT 5"; 
// $result = $conexao->query($sql);



if (isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === 'Administrador') {
    $modal_visible = true;  // Exibe o modal para administradores
} else {
    $modal_visible = false;  // Não exibe o modal para outros tipos de usuário
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
                            <a href="pre_historia.php">Pré-História</a>
                            <a href="idade_antiga.php">Idade Antiga</a>
                            <a href="idade_media.php">Idade Média</a>
                            <a href="idade_moderna.php">Idade Moderna</a>
                            <a href="idade_contemporanea.php">Idade Contemporânea</a>
                        </div>
                    </li>
                    <li><a href="glossario.php">Glossário</a></li>
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
                    <li><a href="index.php" id="logout">SAIR</a></li>
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
    <a class="botaoABC" id="botaoA" href="#" onclick="carregarGlossario('A')">A</a>
    <a class="botaoABC" id="botaoB" href="#" onclick="carregarGlossario('B')">B</a>
    <a class="botaoABC" id="botaoC" href="#" onclick="carregarGlossario('C')">C</a>
    <a class="botaoABC" id="botaoD" href="#" onclick="carregarGlossario('D')">D</a>
    <a class="botaoABC" id="botaoE" href="#" onclick="carregarGlossario('E')">E</a>
    <a class="botaoABC" id="botaoF" href="#" onclick="carregarGlossario('F')">F</a>
    <a class="botaoABC" id="botaoG" href="#" onclick="carregarGlossario('G')">G</a>
    <a class="botaoABC" id="botaoH" href="#" onclick="carregarGlossario('H')">H</a>
    <a class="botaoABC" id="botaoI" href="#" onclick="carregarGlossario('I')">I</a>
    <a class="botaoABC" id="botaoJ" href="#" onclick="carregarGlossario('J')">J</a>
    <a class="botaoABC" id="botaoK" href="#" onclick="carregarGlossario('K')">K</a>
    <a class="botaoABC" id="botaoL" href="#" onclick="carregarGlossario('L')">L</a>
    <a class="botaoABC" id="botaoM" href="#" onclick="carregarGlossario('M')">M</a>
    <a class="botaoABC" id="botaoN" href="#" onclick="carregarGlossario('N')">N</a>
    <a class="botaoABC" id="botaoO" href="#" onclick="carregarGlossario('O')">O</a>
    <a class="botaoABC" id="botaoP" href="#" onclick="carregarGlossario('P')">P</a>
    <a class="botaoABC" id="botaoQ" href="#" onclick="carregarGlossario('Q')">Q</a>
    <a class="botaoABC" id="botaoR" href="#" onclick="carregarGlossario('R')">R</a>
    <a class="botaoABC" id="botaoS" href="#" onclick="carregarGlossario('S')">S</a>
    <a class="botaoABC" id="botaoT" href="#" onclick="carregarGlossario('T')">T</a>
    <a class="botaoABC" id="botaoU" href="#" onclick="carregarGlossario('U')">U</a>
    <a class="botaoABC" id="botaoV" href="#" onclick="carregarGlossario('V')">V</a>
    <a class="botaoABC" id="botaoW" href="#" onclick="carregarGlossario('W')">W</a>
    <a class="botaoABC" id="botaoX" href="#" onclick="carregarGlossario('X')">X</a>
    <a class="botaoABC" id="botaoY" href="#" onclick="carregarGlossario('Y')">Y</a>
    <a class="botaoABC" id="botaoZ" href="#" onclick="carregarGlossario('Z')">Z</a>
  </div>

  <div class="page-content" id="page-content">
    <?php
    $sql = "SELECT id_glossario, titulo_glossario, descricao_glossario FROM glossario ORDER BY titulo_glossario ASC LIMIT 5";
    $result = $conexao->query($sql);

    // if ($result->num_rows > 0) {
    //     // Exibe os conceitos
    //     while($row = $result->fetch_assoc()) {
    //         echo "<div class='conceito-item'>";
    //         echo "<p>" . $row['titulo_glossario'] . "</p>";
    //         // Verifica se o usuário é administrador antes de mostrar o botão de excluir
    //         if (isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === 'Administrador') {
    //             echo "<a href='excluir_conceito.php?id=" . $row['id_glossario'] . "' class='botao-excluir'>Excluir</a>";
    //         }
    //         echo "</div>";
    //     }
    // } else {
    //     echo "Nenhum conceito encontrado!";
    // }

    // if ($result -> num_rows > 0) {
    //     while ($linha = $result->fetch_assoc()) {
    //         echo"<p class='conceitos'><b>" . $linha['titulo_glossario']. ":</b> ". $linha['descricao_glossario']. "<br>";

    //         // Verificar se o usuário é administrador para exibir o botão de excluir
    //     if (isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === 'Administrador') {
    //         echo "<a href='excluir_conceito.php?id=" . $linha['id_glossario'] . "' class='botao-excluir'>Excluir</a>";
    //     }

    //     }
    // }
    
    ?>
  </div>
<!-- 
  <div class="pagination" id="navPags">
    <a href="#" data-page="1" id="inicio">&laquo; Início</a>
    <a href="#" data-page="prev" id="anterior">&lsaquo; Anterior</a> -->
    <!-- Botões de páginas serão gerados dinamicamente -->
    <!-- <a href="#" data-page="next" id="proximo">Próximo &rsaquo;</a> -->

    <!-- <a href="#" data-page="15" id="fim">Fim &raquo;</a>
  </div> -->

  <?php
// Verifique se o tipo de usuário é administrador
if (isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === 'Administrador') {
    // Exibe o botão apenas para administradores
    echo '<button id="abrirModal" class="botao-inserir">Inserir Novo Conceito</button>';
}
?>

<?php if ($modal_visible): ?>
<!-- Modal para inserir novo conceito -->
<div id="modal" class="modal">
  <div class="modal-content">
    <span class="fechar">&times;</span>
    <h2>Inserir Novo Conceito</h2>
    <form id="formNovoConceito" action="inserir_conceito.php" method="POST">
      <label for="termo">Nome do Termo:</label>
      <input type="text" id="termo" name="termo" required>

      <label for="definicao">Definição:</label>
      <textarea id="definicao" name="definicao" rows="4" required></textarea>

      <button type="submit" class="botao-salvar">Salvar Conceito</button>
    </form>
  </div>
</div>
<?php endif; ?>

<!-- Modal de Edição -->
 <div id="vsfd">
<div id="modal" style="display: none;">
    <div class="modal-content">
        <span class="fechar">&times;</span>
        <h2>Editar Conceito</h2>
        <form id="formEditarConceito" method="POST" action="editar_conceito.php">
            <input type="hidden" id="id_glossario" name="id_glossario">
            <label for="termo">Termo:</label>
            <input type="text" id="termo" name="termo" required>
            <label for="definicao">Definição:</label>
            <textarea id="definicao" name="definicao" required></textarea>
            <button type="submit">Salvar Alterações</button>
        </form>
    </div>
</div>
</div>




  <div id="navLetras"></div>

</body>
</html>