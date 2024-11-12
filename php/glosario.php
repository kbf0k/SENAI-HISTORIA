<?php
include_once('conexao.php');
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);



// if(!isset($_SESSION['nome_sessao'])){
//     header('Location: index.php');
//     exit();
// }

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
    <script src="../javascript/glosario.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>

</head>
<title>Glossário</title>
</head>

<body>
    <header class="header">
        <div class="container logo-menu">
            <div class="logo">
            <a href="inicio.php"><img src="../img/Logo Nova Site História.png" alt="Logo"></a>

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
                    <li><a id="logout">SAIR</a></li>
                    <?php else: ?>
                    <li><a href="index.php">LOGIN</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <h1 id="tt-gloss">Glossário Histórico</h1>

    <!-- <div class="search-bar">
    <form id="busca-conceito" method="POST" onsubmit="console.log('Formulário enviado!');">
        <input type="text" name="termo" id="barra-pesquisa" placeholder="Que termo você procura?">
        <button type="submit">
            <img id="botao-pesquisa" src="../img/lupa_glossario.png" alt="Buscar">
        </button>
    </form>
  </div> -->

  <p class="search-hint">Clique em uma letra abaixo para ver os conceitos que se iniciam com ela.</p>

  <div class="alphabet-container">
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

  </div>

  <?php

    // var_dump($_SERVER['REQUEST_METHOD'] === "POST");
    // var_dump($_POST);

    $pesquisa = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['termo'])) {
        $pesquisa = $_POST['termo'];
        echo "<script>console.log('TESTANDO')</script>;";
    }

    if(!empty($pesquisa)) {
        $sql_pesquisa = "SELECT glossario.titulo_glossario, glossario.descricao_glossario, glossario.id_glossario FROM glossario WHERE glossario.titulo_glossario LIKE ?";

        $busca = "%".$pesquisa."%";
        $stmt = $conexao->prepare($sql_pesquisa);
        $stmt->bind_param('s', $busca);
        $stmt->execute();
        $resultado_pesquisa = $stmt->get_result();

        if($resultado_pesquisa->num_rows > 0) {
            while ($linha_pesq = $resultado_pesquisa->fetch_assoc()) {
                if (isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === 'Administrador') {
                    echo "<div class='item_adm'>";
                    echo "<button class='botao-extra editar' data-id='" . $linha_pesq['id_glossario'] . "'><img src='../img/lapis_icon.png' alt='Editar'></button>";
                    echo "<a href='excluir.php?id_glossario=" . $linha_pesq['id_glossario'] . "'>
                        <button class='botao-extra excluir'><img src='../img/lixeira_icon.png' alt='Excluir'></button>
                        </a>";
                    echo "</div>";
                }
                // echo "<h2>Teste</h2>";
                echo "<p class='conceitos'><b>" . $linha_pesq['titulo_glossario'] . ":</b> " . $linha_pesq['descricao_glossario'] . "</p>";
                echo "<script>console.log('Teste');</script>";
            }
        } else {
            echo "<p><b>Nenhum conceito encontrado com o termo: </b>". '"' .$pesquisa. '"'  . "</p>";
        }
        $stmt->close();
    }


    if (isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === 'Administrador' && !empty($pesquisa)) {
        // Exibe o botão apenas para administradores
        echo '<button id="voltar-glossario" class="">Sair de Pesquisa por Nome</button>';
    }

  ?>

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
 <div id="modalEditar">
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

  <footer class="footer">
        <h3>Equipe Desenvolvedora SOFTDEV</h3>
        <a href="https://www.linkedin.com/in/kaiqueferreira0/" target="_blank">Kaique Bernardes Ferreira</a>
        <a href="https://www.linkedin.com/in/jo%C3%A3o-gustavo-mota-ramos-9b60242a2/" target="_blank">João Gustavo Mota Ramos</a>
        <a href="https://www.linkedin.com/in/jo%C3%A3o-pedro-da-cunha-machado-2089482b7/" target="_blank">João Pedro da Cunha Machado</a>
        <a href="https://www.linkedin.com/in/murilo-silva-0377322b7/" target="_blank">Murilo Henrique Souza Silva</a>
        <a href="https://www.linkedin.com/in/yago-moraes-6a09b3326/" target="_blank">Yago Roberto Gomes Moraes</a>

        <h3 id="link">Links Úteis</h3>

        <a href="termosDeUso.php">Termos de Uso</a></li>
        <a href="politica_privacidade.php">Política de Privacidade</a></li>
        <a href="ajuda.php">Ajuda</a></li>
        <a href="faq.php">FAQ</a></li>


        <div class="footer-bottom">
            <p>&copy; 2024 História em Foco. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>

<script>
    document.getElementById("busca-conceito").addEventListener("submit", function(event) {
    event.preventDefault();
});
</script>