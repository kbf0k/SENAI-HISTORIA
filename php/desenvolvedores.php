<?php
include_once('conexao.php');
session_start();

?>

<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvedores do Projeto</title>
    <link rel="stylesheet" href="../css/desenvolvedores.css">
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
        <h1>Equipe Desenvolvedora SoftDev</h1>
        <div class="flex-box">
            <div class="membros">
                <a href="https://www.linkedin.com/in/jo%C3%A3o-gustavo-mota-ramos-9b60242a2/" target="_blank">
                    <img src="../img/joaoG-copia.JPG" alt="João Gustavo">
                </a>
                <h2>João Gustavo</h2>
                <p>Email: joaogustavo2202@gmail.com</p>
                <p>Telefone: (12) 99220-2489 </p>
                <a href="https://www.linkedin.com/in/jo%C3%A3o-gustavo-mota-ramos-9b60242a2/" target="_blank">Linkedin</a>
            </div>
            <div class="membros">
                <a href="https://www.linkedin.com/in/jo%C3%A3o-pedro-da-cunha-machado-2089482b7/" target="_blank">
                    <img src="../img/joaoP-copia.JPG" alt="João Pedro">
                </a>
                <h2>João Pedro</h2>
                <p>Email: jotapepe.machado@gmail.com</p>
                <p>Telefone: (12) 98898-2050</p>
                <a href="https://www.linkedin.com/in/jo%C3%A3o-pedro-da-cunha-machado-2089482b7/" target="_blank">Linkedin</a>
            </div>
            <div class="membros">
                <a href="https://www.linkedin.com/in/kaiqueferreira0k/" target="_blank">
                    <img src="../img/kaique-copia.JPG" alt="Kaique">
                </a>
                <h2>Kaique</h2>
                <p>Email: kaique1245br@gmail.com</p>
                <p>Telefone: (12) 99649-9582</p>
                <a href="https://www.linkedin.com/in/kaiqueferreira0k/" target="_blank">Linkedin</a>
            </div>
            <div class="membros">
                <a href="https://www.linkedin.com/in/yago-moraes-6a09b3326/" target="_blank">
                    <img src="../img/yago-copia.JPG" alt="Yago">
                </a>
                <h2>Yago</h2>
                <p>Email: yago.roberto2008@gmail.com</p>
                <p>Telefone: (12) 99781-5465</p>
                <a href="https://www.linkedin.com/in/yago-moraes-6a09b3326/" target="_blank">Linkedin</a>
            </div>

            <div class="membros">
                <a href="https://www.linkedin.com/in/murilo-silva-0377322b7/" target="_blank">
                    <img src="../img/murilo-copia.jpg" alt="Yago">
                </a>
                <h2>Murilo Henrique</h2>
                <p>Email: timao.alenda@gmail.com</p>
                <p>Telefone: (12) 99219-5842</p>
                <a href="https://www.linkedin.com/in/murilo-silva-0377322b7/" target="_blank">Linkedin</a>
            </div>
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