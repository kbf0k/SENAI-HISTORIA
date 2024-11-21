<?php
include_once('conexao.php');
session_start();

if (!isset($_SESSION['nome_sessao'])) {
    header('Location: index.php');
    exit();
}


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
                <a href="inicio.php"><img src="../img/Logo Nova Site História.png" alt="Logo"></a>
            </div>
            <nav class="menu">
                <ul class="nav-list">
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
                    <li><a href="enem.php">Enem</a></li>


                    <?php if (isset($_SESSION['nome_sessao'])): ?>
                        <div class="user-vector">
                            <a href="perfil.php">
                                <img id="logo-vector" src="../img/user-vector.png" alt="">
                                <p>
                                    <?= $_SESSION['nome_sessao'] ?>
                                </p>
                                <p>
                                    <?= $_SESSION['tipo_sessao'] ?>
                                </p>
                            </a>
                        </div>
                        <li><img id="logout" src="../img/logout.png" alt=""></li>
                    <?php else: ?>
                        <li><a href="index.php">LOGIN</a></li>
                    <?php endif; ?>
                    </a>
                </ul>
            </nav>
        </div>
    </header>
    <div id="mobile-header">
        <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
            <span id="hamburger"></span>
        </button>
        <a id="mobile-logo" href="inicio.php"><img src="../img/Logo Nova Site História.png" class="logo" alt=""></a>
        <div class="user-options">
            <div class="user-vector">
                <a href="perfil.php">
                    <?php if (isset($_SESSION['nome_sessao'])): ?>
                        <img id="logo-vector" src="../img/user-vector.png" alt="Imagem do usuário">
                        <div class="user-info">
                            <p><?= $_SESSION['nome_sessao'] ?></p>
                            <p><?= $_SESSION['tipo_sessao'] ?></p>
                        </div>
                    <?php endif; ?>
                </a>
            </div>
        </div>
        <nav id="nav">
            <ul id="mobile-menu" role="mobile-menu">
                <li><a href="pre_historia.php">Pré-História</a></li>
                <li><a href="idade_antiga.php">Idade Antiga</a></li>
                <li><a href="idade_media.php">Idade Média</a></li>
                <li><a href="idade_moderna.php">Idade Moderna</a></li>
                <li><a href="idade_contemporanea.php">Idade Contemporânea</a></li>
                </li>
                <li><a href="glossario.php">Glossário</a></li>
                <li><a href="atividades.php">Atividades Complementares</a></li>
                <li><a href="enem.php">Enem</a></li>

                <?php if (isset($_SESSION['nome_sessao'])): ?>
                    <a id="logout-mobile">SAIR</a>
                <?php else: ?>
                    <a href="index.php">LOGIN</a>
                <?php endif; ?>
            </ul>
        </nav>
    </div>

    <h1 id="tt-gloss">Glossário Histórico</h1>


    <p class="search-hint">Clique em uma letra abaixo para ver os conceitos que se iniciam por ela.</p>

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

        $letra = isset($_GET['letra']) ? $_GET['letra'] : 'A';

        $sql = "SELECT * FROM glossario WHERE titulo_glossario LIKE '$letra%' ORDER BY titulo_glossario ASC";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            while ($linha = $result->fetch_assoc()) {
                if (isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === 'Administrador') {
                    echo "<div class='item_adm'>";
                    echo "<button class='botao-extra editar' data-id='" . $linha['id_glossario'] . "'><img id='lapis' src='../img/lapis_icon.png' alt='Editar'></button>";
                    // Formulário de exclusão
                    echo "<a href='excluir.php?id_glossario=" . $linha['id_glossario'] . "'>
                <button class='botao-extra excluir'><img src='../img/lixeira_icon.png' alt='Excluir'></button>
                </a>";
                }
                echo "<p class='conceitos'><b>" . $linha['titulo_glossario'] . ":</b> " . $linha['descricao_glossario'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Nenhum termo encontrado para a letra $letra.</p>";
        }

        // Verifica se o botão de exclusão foi pressionado
        if (isset($_POST['Excluir'])) {
            $id_glossario = $_POST['id_glossario'];
            echo "teste";
            // Depuração - Verificando se o ID foi recebido corretamente


            // Exclui o registro do banco de dados
            $sql_delete = "DELETE FROM glossario WHERE id_glossario = ?";
            if ($stmt = $conexao->prepare($sql_delete)) {
                $stmt->bind_param("i", $id_glossario);
                echo "<p>ID do glossário a ser excluído: " . $id_glossario . "</p>"; // Exibe o ID para depuração
                if ($stmt->execute()) {

                    echo "<p>Termo excluído com sucesso!</p>";
                    // Redireciona para evitar reenvio do formulário após a atualização
                    header("Location: " . $_SERVER['PHP_SELF']);
                    exit();
                } else {
                    echo "<p>Erro ao excluir o termo.</p>";
                }
                $stmt->close();
            } else {
                echo "<p>Erro ao preparar a consulta.</p>";
            }
        }

        ?>
    </div>

    </div>

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
                <h2>Conceito Histórico</h2>
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


    <div id="navLetras"></div>

    <footer class="footer">
        <a id="titulo" href="desenvolvedores.php" target="_blank">Equipe Desenvolvedora SoftDev</a>
        <a href="https://www.linkedin.com/in/kaiqueferreira0/" target="_blank">Kaique Bernardes Ferreira</a>
        <a href="https://www.linkedin.com/in/jo%C3%A3o-gustavo-mota-ramos-9b60242a2/" target="_blank">João Gustavo Mota Ramos</a>
        <a href="https://www.linkedin.com/in/jo%C3%A3o-pedro-da-cunha-machado-2089482b7/" target="_blank">João Pedro da Cunha Machado</a>
        <a href="https://www.linkedin.com/in/murilo-silva-0377322b7/" target="_blank">Murilo Henrique Souza Silva</a>
        <a href="https://www.linkedin.com/in/yago-moraes-6a09b3326/" target="_blank">Yago Roberto Gomes Moraes</a>

        <h3 id="link">Links Úteis</h3>

        <a href="termosDeUso.php">Termos de Uso</a></li>
        <a href="politica_privacidade.php">Política de Privacidade</a></li>
        <a href="ajuda.php">Ajuda</a></li>
        <a href="faq.php">Perguntas Frequentes</a></li>


        <div class="footer-bottom">
            <p>&copy; 2024 História em Foco. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>