<?php
include_once('conexao.php');
session_start();

if (!isset($_SESSION['nome_sessao'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="../css/inicio.css">
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
    <main>
        <?php ?>
        <section class="intro">
            <video autoplay muted loop class="background-video">
                <source src="../video/video-inicio.mp4" type="video/mp4">
            </video>

            <div class="container">
                <h2 class="animated animated-title">Bem-vindo ao História em Foco!</h2>
                <p class="animated animated-subtitle">Explore os períodos mais importantes da história e descubra como esses momentos influenciaram o
                    desenvolvimento da sociedade em que vivemos. Cada etapa da história oferece uma visão única sobre os
                    acontecimentos e transformações que moldaram o mundo ao longo dos séculos. Aproveite os recursos
                    interativos, vídeos educativos e leituras complementares desse site para aprofundar seu conhecimento
                    sobre a história humana.</p>
                <a href="#periodos" class="animated animated-btn btn">Comece sua jornada histórica</a>
            </div>
        </section>

        <section id="periodos" class="periodos">
            <div class="container">
                <h2>Períodos Históricos</h2>
                <div class="cards">
                    <div class="periodo-card animated animated-cards">
                        <a href="pre_historia.php">
                            <h3>Pré História</h3>
                            <p>Conheça os primeiros passos da humanidade, desde os hominídeos até o desenvolvimento da
                                agricultura.</p>
                            <img src="../img/pintura-rupestre.webp" alt="Banner Pré História" class="banner-img">
                        </a>
                    </div>
                    <div class="periodo-card animated animated-cards">
                        <a href="idade_antiga.php">
                            <h3>Idade Antiga</h3>
                            <p>Explore as civilizações antigas, como a Mesopotâmia, Egito e Grécia. Foi quando o ser humano
                                desenvolveu a primeira forma de escrita.</p>
                            <img src="../img/piramide.webp" alt="" class="banner-img">
                        </a>
                    </div>
                    <div class="periodo-card animated animated-cards">
                        <a href="idade_media.php">
                            <h3>Idade Média</h3>
                            <p>Descubra a era medieval, marcada pelo feudalismo e pela influência da Igreja. Ela é divida em dois períodos: a Alta e a Baixa Idade Média.</p>
                            <img src="../img/idade-media.jpg" alt="" class="banner-img">
                        </a>
                    </div>
                    <div class="periodo-card animated animated-cards">
                        <a href="idade_moderna.php">
                            <h3>Idade Moderna</h3>
                            <p>Analise os avanços científicos, a Revolução Industrial e as grandes descobertas. Caracterizou-se por uma fase de grandes transformações.</p>
                            <img src="../img/idade-moderna.jpeg" alt="" class="banner-img">
                        </a>
                    </div>
                    <div class="periodo-card animated animated-cards">
                        <a href="idade_contemporanea.php">
                            <h3>Idade Contemporânea</h3>
                            <p>Entenda os desafios do mundo atual, incluindo guerras, transformações, globalização e tecnologia.</p>
                            <img src="../img/fabricas-idade-contemporane.jpg" alt="" class="banner-cont-img">
                        </a>
                    </div>
                </div>
            </div>
            <div class="linha-do-tempo">
                <div class="linha-horizontal"></div>
                <div class="eventos">

                    <div class="evento">
                        <div class="corda"></div>
                        <div class="circulo"></div>
                        <div class="descricao">
                            <span class="titulo">Pré-História</span>
                            <span class="data">2.500.000 a.C. - 4.000 a.C.</span>
                        </div>
                    </div>
                    <div class="evento animated animated-evento">
                        <div class="corda"></div>
                        <div class="circulo"></div>
                        <div class="descricao">
                            <span class="titulo">Idade Antiga</span>
                            <span class="data">4.000 a.C. - 476 d.C.</span>
                        </div>
                    </div>
                    <div class="evento animated animated-evento">
                        <div class="corda"></div>
                        <div class="circulo"></div>
                        <div class="descricao">
                            <span class="titulo">Idade Média</span>
                            <span class="data">476 d.C. - 1453</span>
                        </div>
                    </div>
                    <div class="evento animated animated-evento">
                        <div class="corda"></div>
                        <div class="circulo"></div>
                        <div class="descricao">
                            <span class="titulo">Idade Moderna</span>
                            <span class="data">1453 - 1789</span>
                        </div>
                    </div>
                    <div class="evento animated animated-evento">
                        <div class="corda"></div>
                        <div class="circulo"></div>
                        <div class="descricao">
                            <span class="titulo">Idade Contemporânea</span>
                            <span class="data">1789 - Atualidade</span>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="atividades">
            <div class="container">
                <h2>Atividades Práticas</h2>
                <p>Desenvolva suas habilidades com atividades interativas e desafiadoras!</p>
                <p>Explore opções para testar seu conhecimento e fixar conteúdos de forma divertida.</p>

                <div class="atividades-conteudo">
                    <div class="atividade questionarios animated">
                        <h3>Questionários</h3>
                        <p>Desafie-se com perguntas sobre temas históricos. Esses questionários abrangem desde a Pré-História até a Idade Contemporânea.</p>
                    </div>
                    <div class="atividade atividades-dinamicas animated">
                        <h3>Atividades Dinâmicas</h3>
                        <p>Divirta-se com atividades como caça-palavras e cruzadinhas temáticas, projetadas para reforçar o aprendizado histórico de forma interativa.</p>
                    </div>
                    <div class="atividade jogo-da-memoria animated">
                        <h3>Jogo da Memória</h3>
                        <p>Teste sua memória e associe personagens, eventos e datas importantes com nosso jogo da memória histórico!</p>
                    </div>
                </div>

                <a href="../php/atividades.php" class="btn">Ver Atividades</a>
            </div>
        </section>

        <section class="glossario animated">
            <div class="container">
                <h2>Glossário Histórico</h2>
                <p>Entenda os principais conceitos e termos históricos com nosso glossário interativo.</p>
                <p>Cada definição contém uma explicação breve de fácil entendimento. Aprofunde-se no conhecimento e
                    explore cada termo.</p>
                <a href="../php/glossario.php" class="btn">Acessar Glossário</a>
            </div>
        </section>
        <button id="backToTop" onclick="scrollToTop()">&#8250;</button>
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