<?php
include_once('conexao.php');
session_start();

if (!isset($_SESSION['nome_sessao'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/atividades.css">
    <script src="../javascript/atividades.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <title>Atividades Complementares</title>
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
        <section class="articles">
            <div id="pagetitle">
                <h1>Atividades Complementares</h1>
                <h3>Confira atividades incríveis para você aprimorar ainda mais seu conhecimento histórico!</h3>
            </div>
            <div class="article-container">
                <article>
                    <div class="article-wrapper">
                        <figure>
                            <img src="../img/pintura-rupestre.webp" alt="Título da Atividade 1" />
                        </figure>
                        <div class="article-body">
                            <h2>Pré-História</h2>
                            <p>Explore como os primeiros humanos viviam, caçavam e faziam suas pinturas nas cavernas. Venha descobrir esse mundo cheio de aventuras!</p>
                            <a href="#pre-historia" class="read-more"><span class="sr-only">Confira as atividades da Pré-História</span></a>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="article-wrapper">
                        <figure>
                            <img src="../img/piramide.webp" alt="Título da Atividade 2" />
                        </figure>
                        <div class="article-body">
                            <h2>Idade Antiga</h2>
                            <p>Viaje para o tempo das pirâmides, dos faraós e dos gladiadores. Descubra mistérios e lendas que moldaram as civilizações antigas.</p>
                            <a href="#idade-antiga" class="read-more"><span class="sr-only">Confira as atividades da Idade Antiga</span></a>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="article-wrapper">
                        <figure>
                            <img src="../img/idade-media.jpg" alt="Título da Atividade 3" />
                        </figure>
                        <div class="article-body">
                            <h2>Idade Média</h2>
                            <p>Entre em castelos, conheça cavaleiros e participe de torneios. Aprenda como era a vida na Idade Média com desafios divertidos!</p>
                            <a href="#idade-media" class="read-more"><span class="sr-only">Confira as atividades da Idade Média</span></a>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="article-wrapper">
                        <figure>
                            <img src="../img/idade-moderna.jpeg" alt="Título da Atividade 3" />
                        </figure>
                        <div class="article-body">
                            <h2>Idade Moderna</h2>
                            <p>Conheça grandes exploradores, inventores e artistas que mudaram o mundo. Uma época de descobertas e invenções incríveis te espera!</p>
                            <a href="#idade-moderna" class="read-more"><span class="sr-only">Confira as atividades da Idade Moderna</span></a>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="article-wrapper">
                        <figure>
                            <img src="../img/fabricas-idade-contemporane.jpg" alt="Título da Atividade 3" />
                        </figure>
                        <div class="article-body">
                            <h2>Idade Contemporânea</h2>
                            <p>Descubra as mais novas transformações do nosso mundo. Prepare-se para atividades que conectam o passado ao presente!</p>
                            <a href="#idade-contemporanea" class="read-more"><span class="sr-only">Confira as atividades da Idade Contemporânea</span></a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <section id="nossasatividades">
            <div class="atividadestitulo">
                <h1>Nossas Atividades</h1>
                <h3>Aqui você pode conferir todas nossas atividades de acordo com seu interesse!</h3>
            </div>

            <!-- SEÇÃO CRUZADINHAS -->

            <div class="atividades_news">
                <div class="atividades_title">
                    <h3>Cruzadinhas</h3>
                    <hr class="linha-separadora">
                    <p>
                        Nesta seção, as crianças poderão se divertir com cruzadinhas temáticas sobre períodos históricos!
                        Cada cruzadinha traz pistas simples sobre seus conceitos, ajudando você a resolver esse mistério!
                        As atividades foram pensadas para facilitar o aprendizado e despertar a curiosidade,
                        ajudando as crianças a conhecer figuras e eventos históricos de forma lúdica.
                    </p>
                </div>

                <!-- Área das cruzadinhas -->
                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/prehistoriacuz.png" alt="Cruzadinha Pré-História" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/c066f4abff3a4b94')">Acessar Online</button>
                            <a href="../pdfs/Cruzadinha - Pré-História.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Cruzadinha Pré-História</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/idadeantigacruz.png" alt="Cruzadinha Idade Antiga" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/3c4560a86c201a66')">Acessar Online</button>
                            <a href="../pdfs/Cruzadinha - Idade Antiga.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Cruzadinha Idade Antiga</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/idademediacruz.png" alt="Cruzadinha Idade Média" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/61804cf72d599d6a')">Acessar Online</button>
                            <a href="../pdfs/Cruzadinha - Idade Média.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Cruzadinha Idade Média</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/idademodernacruz.png" alt="Cruzadinha Idade Moderna" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/8827cef2cb99b65e')">Acessar Online</button>
                            <a href="../pdfs/Cruzadinha - Idade Moderna.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Cruzadinha Idade Moderna</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/idadecontemporaneacruz.png" alt="Cruzadinha Idade Contemporânea" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/22ad3bea92410e8e')">Acessar Online</button>
                            <a href="../pdfs/Cruzadinha - Idade Contemporânea.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Cruzadinha Idade Contemporânea</figcaption>
                </figure>
            </div>
            <!-- SEÇÃO CAÇA-PALAVRAS -->

            <div class="atividades_news">
                <div class="atividades_title">
                    <h3>Caça-Palavras</h3>
                    <hr class="linha-separadora">
                    <p>
                        Através do divertido jogo de caça-palavras, você pode explorar termos e conceitos importantes de diferentes períodos históricos. Cada caça-palavras contém palavras relacionadas a eventos, personagens e características marcantes de cada época.

                        Desafie-se a encontrar todas as palavras escondidas enquanto aprimora ainda mais seu conhecimento histórico
                    </p>
                </div>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Imagem Pré História.png" alt="Caça Palavras Pré-História" class="imagem">
                        <div class="opcoes">
                            <a href="../pdfs/Caça Palavras - Pré-História.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Caça Palavras Pré-História</figcaption>
                </figure>
                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Imagem Idade Antiga.png" alt="Caça Palavras Idade Antiga" class="imagem">
                        <div class="opcoes">
                            <a href="../pdfs/Caça Palavras - Idade Antiga.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Caça Palavras Idade Antiga</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Imagem Idade Média.png" alt="Caça Palavras Idade Média" class="imagem">
                        <div class="opcoes">
                            <a href="../pdfs/Caça Palavras - Idade Média.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Caça Palavras Idade Média</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Imagem Idade Moderna.png" alt="Caça Palavras Idade Moderna" class="imagem">
                        <div class="opcoes">
                            <a href="../pdfs/Caça Palavras - Idade Moderna.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Caça Palavras Idade Moderna</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Imagem Contêmporanea.png" alt="Caça Palavras Idade Contemporânea" class="imagem">
                        <div class="opcoes">
                            <a href="../pdfs/Caça Palavras - Idade Contemporânea.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Caça Palavras Idade Contemporânea</figcaption>
                </figure>
            </div>


            <!-- SECAO DE JOGOS DA MEMÓRIA -->

            <div class="atividades_news">
                <div class="atividades_title">
                    <h3>Jogos da Memória</h3>
                    <hr class="linha-separadora">
                    <p>Nesta seção, as crianças poderão se divertir com jogos da memória temáticos sobre períodos históricos! Cada jogo apresenta imagens que ajudam a reforçar o aprendizado de forma lúdica. As atividades foram pensadas para estimular a memória e o conhecimento sobre figuras e eventos históricos.</p>
                </div>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Pré História - Memória.png" alt="Jogo da Memória Pré-História" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/33cfd2e68a8e531f')">Acessar Online</button>
                            <a href="../pdfs/Jogo da Memória - Pré História.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Jogo da Memória Pré-História</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Idade Antiga - Memória.png" alt="Jogo da Memória Idade Antiga" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/2f67af2a37ec4223')">Acessar Online</button>
                            <a href="../pdfs/Jogo da Memória - Idade Antiga.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Jogo da Memória Idade Antiga</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Idade Média - Memória.png" alt="Jogo da Memória Idade Média" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/67ada4535f1ff4a1')">Acessar Online</button>
                            <a href="../pdfs/Jogo da Memória - Idade Média.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Jogo da Memória Idade Média</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Idade Moderna - Memória.png" alt="Jogo da Memória Idade Moderna" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/b1ca8be3564d05d9')">Acessar Online</button>
                            <a href="../pdfs/Jogo da Memória - Idade Moderna.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Jogo da Memória Idade Moderna</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Idade Contemporanea - Memória.png" alt="Jogo da Memória Idade Contemporânea" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/a87fc9e70a94a5da')">Acessar Online</button>
                            <a href="../pdfs/Jogo da Memória - Idade Contemporânea.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Jogo da Memória Idade Contemporânea</figcaption>
                </figure>
            </div>


            <!-- SECAO DO QUIZ -->

            <div class="atividades_news">
                <div class="atividades_title">
                    <h3>Quizzes Históricos</h3>
                    <hr class="linha-separadora">
                    <p>Explore nossos quizzes interativos! Cada quiz aborda um período histórico e proporciona uma forma divertida de aprender sobre a história. Os quizzes estão disponíveis para download e também podem ser acessados online. Prepare-se para responder perguntas que vão estimular sua curiosidade e ampliar sua compreensão da história!</p>
                </div>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Quiz - Pré HIstória.png" alt="Quiz Pré-História" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/53ddacb22623b2ae')">Acessar Online</button>
                            <a href="../pdfs/Quiz - Pré-HIstória.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Quiz Pré-História</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Quiz - Idade Antiga.png" alt="Quiz Idade Antiga" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/67e647c8d1ce37b3')">Acessar Online</button>
                            <a href="../pdfs/Quiz - Idade Antiga.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Quiz Idade Antiga</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Quiz - Idade Média.png" alt="Quiz Idade Média" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/4dd4c8e0461e2563')">Acessar Online</button>
                            <a href="../pdfs/Quiz - Idade Média.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Quiz Idade Média</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Quiz - Idade Moderna.png" alt="Quiz Idade Moderna" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/5c398e6a8662c689')">Acessar Online</button>
                            <a href="../pdfs/Quiz - Idade Moderna.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Quiz Idade Moderna</figcaption>
                </figure>

                <figure class="img-legend">
                    <div class="img-container">
                        <img src="../img/Quiz - Idade Contemporânea.png" alt="Quiz Idade Contemporânea" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/87a3b031f44c98ed')">Acessar Online</button>
                            <a href="../pdfs/Quiz - Idade Contemporânea.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <figcaption>Quiz Idade Contemporânea</figcaption>
                </figure>
            </div>

        </section>

        <!-- Seção da Pré-História -->
        <div class="atividadestitulo" id="remover-title">
            <h2>Atividades por Período</h2>
            <h3>Nessa seção encontre todas as nossas atividades separadas pelo período histórico!</h3>
        </div>
        <section class="atividades_pdf" id="pre-historia">
            <h2>Atividades da Pré-História</h2>
            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/prehistoriacuz.png" alt="Cruzadinha Pré-História" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/c066f4abff3a4b94')">Acessar Online</button>
                        <a href="../pdfs/Cruzadinha - Pré-História.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Cruzadinha Pré-História</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Imagem Pré História.png" alt="Caça Palavras Pré-História" class="imagem">
                    <div class="opcoes">
                        <a href="../pdfs/Caça Palavras - Pré-História.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Caça Palavras Pré-História</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Pré História - Memória.png" alt="Jogo da Memória Pré-História" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/33cfd2e68a8e531f')">Acessar Online</button>
                        <a href="../pdfs/Jogo da Memória - Pré História.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Jogo da Memória Pré-História</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Quiz - Pré HIstória.png" alt="Quiz Pré-História" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/53ddacb22623b2ae')">Acessar Online</button>
                        <a href="../pdfs/Quiz - Pré-HIstória.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Quiz Pré-História</figcaption>
            </figure>
        </section>

        <!-- Seção da Idade Antiga -->

        <section id="idade-antiga" class="atividades_pdf">
            <h2>Atividades da Idade Antiga</h2>
            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/idadeantigacruz.png" alt="Cruzadinha Idade Antiga" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/3c4560a86c201a66')">Acessar Online</button>
                        <a href="../pdfs/Cruzadinha - Idade Antiga.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Cruzadinha Idade Antiga</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Imagem Idade Antiga.png" alt="Caça Palavras Idade Antiga" class="imagem">
                    <div class="opcoes">
                        <a href="../pdfs/Caça Palavras - Idade Antiga.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Caça Palavras Idade Antiga</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Idade Antiga - Memória.png" alt="Jogo da Memória Idade Antiga" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/2f67af2a37ec4223')">Acessar Online</button>
                        <a href="../pdfs/Jogo da Memória - Idade Antiga.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Jogo da Memória Idade Antiga</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Quiz - Idade Antiga.png" alt="Quiz Idade Antiga" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/67e647c8d1ce37b3')">Acessar Online</button>
                        <a href="../pdfs/Quiz - Idade Antiga.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Quiz Idade Antiga</figcaption>
            </figure>

        </section>

        <!-- Seção da Idade Média -->

        <section id="idade-media" class="atividades_pdf">
            <h2>Atividades da Idade Média</h2>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/idademediacruz.png" alt="Cruzadinha Idade Média" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/61804cf72d599d6a')">Acessar Online</button>
                        <a href="../pdfs/Cruzadinha - Idade Média.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Cruzadinha Idade Média</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Imagem Idade Média.png" alt="Caça Palavras Idade Média" class="imagem">
                    <div class="opcoes">
                        <a href="../pdfs/Caça Palavras - Idade Média.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Caça Palavras Idade Média</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Idade Média - Memória.png" alt="Jogo da Memória Idade Média" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/67ada4535f1ff4a1')">Acessar Online</button>
                        <a href="../pdfs/Jogo da Memória - Idade Média.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Jogo da Memória Idade Média</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Quiz - Idade Média.png" alt="Quiz Idade Média" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/4dd4c8e0461e2563')">Acessar Online</button>
                        <a href="../pdfs/Quiz - Idade Média.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Quiz Idade Média</figcaption>
            </figure>

        </section>

        <!-- Seção da Idade Moderna -->

        <section id="idade-moderna" class="atividades_pdf">
            <h2>Atividades da Idade Moderna</h2>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/idademodernacruz.png" alt="Cruzadinha Idade Moderna" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/8827cef2cb99b65e')">Acessar Online</button>
                        <a href="../pdfs/Cruzadinha - Idade Moderna.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Cruzadinha Idade Moderna</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Imagem Idade Moderna.png" alt="Caça Palavras Idade Moderna" class="imagem">
                    <div class="opcoes">
                        <a href="../pdfs/Caça Palavras - Idade Moderna.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Caça Palavras Idade Moderna</figcaption>
            </figure>
            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Idade Moderna - Memória.png" alt="Jogo da Memória Idade Moderna" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/b1ca8be3564d05d9')">Acessar Online</button>
                        <a href="../pdfs/Jogo da Memória - Idade Moderna.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Jogo da Memória Idade Moderna</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Quiz - Idade Moderna.png" alt="Quiz Idade Moderna" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/5c398e6a8662c689')">Acessar Online</button>
                        <a href="../pdfs/Quiz - Idade Moderna.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Quiz Idade Moderna</figcaption>
            </figure>

        </section>


        <!-- Seção da Idade Contemporânea -->

        <section id="idade-contemporanea" class="atividades_pdf">
            <h2>Atividades da Idade Contemporânea</h2>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/idadecontemporaneacruz.png" alt="Cruzadinha Idade Contemporânea" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/22ad3bea92410e8e')">Acessar Online</button>
                        <a href="../Cruzadinha - Idade Contemporânea.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Cruzadinha Idade Contemporânea</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Imagem Contêmporanea.png" alt="Caça Palavras Idade Contemporânea" class="imagem">
                    <div class="opcoes">
                        <a href="../pdfs/Caça Palavras - Idade Contemporânea.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Caça Palavras Idade Contemporânea</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Idade Contemporanea - Memória.png" alt="Jogo da Memória Idade Contemporânea" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/a87fc9e70a94a5da')">Acessar Online</button>
                        <a href="../pdfs/Jogo da Memória - Idade Contemporânea.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Jogo da Memória Idade Contemporânea</figcaption>
            </figure>

            <figure class="img-legend">
                <div class="img-container">
                    <img src="../img/Quiz - Idade Contemporânea.png" alt="Quiz Idade Contemporânea" class="imagem">
                    <div class="opcoes">
                        <button onclick="window.open('https://interacty.me/projects/87a3b031f44c98ed')">Acessar Online</button>
                        <a href="../pdfs/Quiz - Idade Contemporânea.pdf" download>Baixar PDF</a>
                    </div>
                </div>
                <figcaption>Quiz Idade Contemporânea</figcaption>
            </figure>

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