<?php
include_once('conexao.php');
session_start();

if (isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === "Aluno") {
    header('Location: inicio.php');
    exit();
}

if (!isset($_SESSION['nome_sessao'])) {
    header('Location: index.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nome_cadastro']) && isset($_POST['sobrenome_cadastro']) && isset($_POST['tipo_cadastro']) && isset($_POST['email_cadastro']) && isset($_POST['senha_cadastro'])) {

        $nome_cadastro_digitado = $_POST['nome_cadastro'];
        $sobrenome_cadastro_digitado = $_POST['sobrenome_cadastro'];
        $tipo_cadastro_digitado = $_POST['tipo_cadastro'];
        $email_cadastro_digitado = $_POST['email_cadastro'];
        $senha_cadastro_digitado = md5($_POST['senha_cadastro']);

        $sql1 = "INSERT INTO usuarios(nome_usuario,sobrenome_usuario,tipo_usuario,email_usuario,senha_usuario) VALUES(?,
        ?,?,?,?)";
        $stmt1 = $conexao->prepare($sql1);
        $stmt1->bind_param('sssss', $nome_cadastro_digitado, $sobrenome_cadastro_digitado, $tipo_cadastro_digitado, $email_cadastro_digitado, $senha_cadastro_digitado);
        $stmt1->execute();
        $result1 = $stmt1->get_result();
        echo '<script>
        alert("Usuário cadastrado com sucesso");
        setTimeout(function(){
            window.location.href = "inicio.php";
        }, 1000);
      </script>';
    }
}

?>

<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Administrador</title>
    <link rel="stylesheet" href="../css/criar_adm.css">
    <script src="../javascript/inicio.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
</head>

<body>
    <header class="header">
        <div class="container logo-menu">
            <div class="logo">
                <a href="inicio.php"><img src="../img/Logo Nova Site História.png" alt="Logo"></a>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="inicio.php">Início</a></li>
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
                <li><a href="inicio.php">Início</a></li>
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

    <main>
        <div id="container">
            <form action="" method="POST" id="cadastrar">
            <a id="voltar" href="perfil.php"><img src="../img/voltar_seta.png" alt="">Voltar</a>
                <h1 id="title-add">Adicionar Administrador</h1>
                <p id="p-add">Insira as informações para criar uma conta do tipo administrador</p>


                <label for="nome">Nome</label>
                <input type="text" name="nome_cadastro" id="nome" required>

                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome_cadastro" id="sobrenome" required>

                <label for="tipo">Tipo</label>
                <select name="tipo_cadastro" id="tipo">
                    <option value="administrador">Administrador</option>
                </select>

                <label for="email_cadastro">Email</label>
                <input type="email" name="email_cadastro" id="email_cadastro" required placeholder="@email.com">

                <label for="senha_cadastro">Criar Senha <p id="senha_mensagem"></p> </label>
                <input type="password" name="senha_cadastro" id="senha_cadastro" required placeholder="******">

                <label for="repetir_senha">Repetir Senha <h2 id="senha_mensagem2"></h2> </label>
                <input type="password" name="repetir_senha" id="repetir_senha" required placeholder="******">

                <button type="submit">Criar Administrador</button>
            </form>
        </div>
    </main>

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