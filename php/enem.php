<!-- <?php
        include_once('conexao.php');
        session_start();

        if (!isset($_SESSION['nome_sessao'])) {
            header('Location: index.php');
            exit();
        }
        ?> -->
<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="../css/enem.css">
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

                    <?php if (isset($_SESSION['nome_sessao'])): ?>
                        <div class="user-vector">
                            <img id="logo-vector" src="../img/user-vector.png" alt="">
                            <p>
                                <?= $_SESSION['nome_sessao'] ?>
                            </p>
                            <p>
                                <?= $_SESSION['tipo_sessao'] ?>
                            </p>
                        </div>
                        <li><img id="logout" src="../img/logout.png" alt=""></li>
                    <?php else: ?>
                        <li><a href="index.php">LOGIN</a></li>
                    <?php endif; ?>
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
            <?php if (isset($_SESSION['nome_sessao'])): ?>
                <a id="logout-mobile">SAIR</a>
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
                </li>
                <li><a href="glossario.php">Glossário</a></li>
                <li><a href="atividades.php">Atividades Complementares</a></li>
            </ul>
        </nav>
    </div>
    <main>
        <section class="articles">
            <div id="pagetitle">
                <h1>ENEM e Vestibulares</h1>
                <h3>Prepare-se para os principais vestibulares e o ENEM com conteúdos completos e atualizados sobre a História!</h3>
            </div>
            <div class="article-container">
                <article>
                    <div class="article-wrapper">
                        <figure>
                            <img src="../img/materiais_enem.jpg" alt="Título da Atividade 1" />
                        </figure>
                        <div class="article-body">
                            <h2>Principais Conteúdos</h2>
                            <p>Descubra os principais temas de história que caem no ENEM. Nesta seção, focamos nos assuntos essenciais para o exame, com uma visão detalhada dos conteúdos mais recorrentes e dicas de estudo para cada um, para que você consiga arrasar na prova.
                            </p>
                            <a href="#dire_conteudo" class="read-more"><span class="sr-only">Ver Mais</span></a>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="article-wrapper">
                        <figure>
                            <img src="../img/materias_de_estudo.jpg" alt="Título da Atividade 2" />
                        </figure>
                        <div class="article-body">
                            <h2>Materiais de Estudo</h2>
                            <p>Explore nossa seleção de materiais de estudo para o ENEM em história, incluindo vídeos, sites, e recursos interativos. Aqui você encontra ferramentas práticas para reforçar o aprendizado e tornar a preparação mais dinâmica.</p>
                            <a href="#idade-antiga" class="read-more"><span class="sr-only">Ver Mais</span></a>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="article-wrapper">
                        <figure>
                            <img src="../img/questoes_enem.webp" alt="Título da Atividade 3" />
                        </figure>
                        <div class="article-body">
                            <h2>Questões de Prova</h2>
                            <p>Teste seu conhecimento com questões de história do ENEM! Essa seção reúne perguntas de provas passadas, organizadas por tema, para você praticar e se familiarizar com o estilo das questões e o nível de exigência do exame.</p>
                            <a href="#idade-media" class="read-more"><span class="sr-only">Ver Mais</span></a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <section class="conteudos-vestibulares" id="dire_conteudo">
            <h2>Como Estudar para Vestibulares de História</h2>
            <p>Para garantir uma boa preparação, concentre-se nos tópicos mais recorrentes nas provas de vestibulares e ENEM. Confira abaixo os principais períodos que você deve estudar com profundidade.</p>

            <div class="periodos">
                <h3>O que estudar para o ENEM?</h3>
                <p>Tradicionalmente, as perguntas de História do Exame Nacional do Ensino Médio (Enem) apresentam maior foco em História do Brasil.
                    Apesar do Brasil ser o tema mais cobrado, não esqueça de revisar temas centrais da História Geral, como Revolução Francesa, Revolução Industrial, ideologias como o fascismo e o comunismo, pois também costumam cair no Enem.
                </p>
            </div>

            <div class="temas">
                <h3>Temas Transversais Importantes</h3>
                <ul>
                    <li><strong>História do Brasil:</strong> Desde o período colonial, passando pelo Império, até o período republicano e contemporâneo, incluindo os principais movimentos sociais e políticos.</li>
                    <li><strong>Movimentos Sociais e Revoluções:</strong> Revoluções que marcaram o mundo, como a Revolução Russa, a Revolução Chinesa e os movimentos de independência na América Latina.</li>
                    <li><strong>História Cultural e Econômica:</strong> Entenda as mudanças culturais e econômicas em cada período, como o mercantilismo, capitalismo e socialismo.</li>
                    <li><strong>Geopolítica Contemporânea:</strong> Guerra Fria, descolonização da África e Ásia, conflitos atuais e o papel de organizações internacionais.</li>
                </ul>
            </div>

            <div class="dicas-estudo">
                <h3>Dicas de Foco nos Estudos</h3>
                <p>Para cada tema, concentre-se em:</p>
                <ul>
                    <li><strong>Fatos Relevantes:</strong> Identifique e memorize os acontecimentos mais significativos e suas causas e consequências.</li>
                    <li><strong>Personagens Importantes:</strong> Conheça as figuras históricas que marcaram cada período e seus impactos.</li>
                    <li><strong>Interpretação de Contexto:</strong> Entenda como os eventos se conectam e influenciam uns aos outros ao longo da história.</li>
                </ul>
            </div>
        </section>
        <section id="estudos-enem" class="enem-section">
            <h2>Estudos para o ENEM - História</h2>
            <p>Explore os vídeos e mapas mentais sobre os temas que mais caem no ENEM.</p>

            <div class="content-grid">
                <!-- Seção de vídeos -->
                <div class="video-section">
                    <h3>Vídeos Principais</h3>
                    <div class="videos">
                        <iframe src="https://www.youtube.com/embed/LxuTxkHAXeQ?si=qdzszvuVSPBj_daI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <iframe src="https://www.youtube.com/embed/zyMumTbX7Cg?si=Ld7MUB3c_ENmVJCe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <iframe src="URL_DO_VIDEO3" title="Vídeo 3"></iframe>
                        <iframe src="URL_DO_VIDEO4" title="Vídeo 4"></iframe>
                        <iframe src="URL_DO_VIDEO5" title="Vídeo 5"></iframe>
                        <iframe src="URL_DO_VIDEO6" title="Vídeo 6"></iframe>
                    </div>
                </div>

                <!-- Seção de Mapas Mentais -->
                <div class="mapa-mental-section">
                    <h3>Mapas Mentais</h3>
                    <div class="mapas">
                        <img src="URL_MAPA_MENTAL1" alt="Mapa Mental 1">
                        <img src="URL_MAPA_MENTAL2" alt="Mapa Mental 2">
                        <img src="URL_MAPA_MENTAL3" alt="Mapa Mental 3">
                        <img src="URL_MAPA_MENTAL4" alt="Mapa Mental 4">
                        <img src="URL_MAPA_MENTAL5" alt="Mapa Mental 5">
                        <img src="URL_MAPA_MENTAL6" alt="Mapa Mental 6">
                    </div>
                </div>
            </div>
        </section>


    </main>
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