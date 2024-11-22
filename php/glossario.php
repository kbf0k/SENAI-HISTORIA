<?php
include_once('conexao.php');
session_start();

if (!isset($_SESSION['nome_sessao'])) {
    header('Location: index.php');
    exit();
}


$modal_visible = isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === 'Administrador';

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
        <?php
        foreach (range('A', 'Z') as $letter) {
            echo "<a class='botaoABC' href='?letra=$letter'>$letter</a>";
        }
        ?>
    </div>

    <div class="page-content" id="page-content">
        <?php
        // Pega a letra selecionada ou usa 'A' como padrão
        $letra = $_GET['letra'] ?? 'A';

        $sql = "SELECT * FROM glossario WHERE titulo_glossario LIKE '$letra%' ORDER BY titulo_glossario ASC";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0):
            while ($linha = $result->fetch_assoc()):
                echo "<div class='item'>";
                if ($modal_visible) {
                    echo "
                        <button class='botao-extra editar'  termo_id='" . $linha['id_glossario'] . "', termo_titulo='" . $linha['titulo_glossario'] . "', termo_descricao='" . $linha['descricao_glossario'] . "'><img id='lapis' src='../img/lapis_icon.png' alt='Editar'></button>
                        <button class='botao-extra excluir' termo_id=" . $linha['id_glossario'] . "'><img src='../img/lixeira_icon.png' alt='Excluir'></button>
                        ";
                }
                echo "<p class='conceitos'><b>" . htmlspecialchars($linha['titulo_glossario']) . ":</b> " . htmlspecialchars($linha['descricao_glossario']) . "</p>";
                echo "</div>";
            endwhile;
        else:
            echo "<p>Nenhum termo encontrado para a letra $letra.</p>";
        endif;

        ?>
    </div>

    <button id="abrirModal"
        class="botao-inserir"
        termo_id="<?php echo $linha['id_glossario']; ?>"
        termo_titulo="<?php echo htmlspecialchars($linha['titulo_glossario'], ENT_QUOTES, 'UTF-8'); ?>"
        termo_descricao="<?php echo htmlspecialchars($linha['descricao_glossario'], ENT_QUOTES, 'UTF-8'); ?>">
        Inserir Novo Conceito
    </button>

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