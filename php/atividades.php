<?php
include_once('conexao.php');
session_start();

if(!isset($_SESSION['nome_sessao'])){
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="../javascript/atividades.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <title>Atividades Complementares</title>
</head>
<body>
    <header class="header">
        <div class="container logo-menu">
            <div class="logo">
                <img src="../img/LOGO-HISTORIA-INICIO-SEM-FUNDO.png" alt="Logo">
                <h1>História</h1>
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
                            <h2>Idade Contêmporanea</h2>
                            <p>Descubra as mais novas transfomações do nosso mundo. Prepare-se para atividades que conectam o passado ao presente!</p>
                            <a href="#idade-contemporanea" class="read-more"><span class="sr-only">Confira as atividades da Idade Contêmporanea</span></a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <section id="nossasatividades">
            <!-- <h2>Nossas Atividades</h2> -->
            <div>
                <!-- <h3>Cruzadinhas</h3> -->
                <div id="cruzadinhas">
                    <figure>
                        <img src="../img/prehistoriacuz.png" alt="Descrição da imagem">
                        <figcaption>Cruzadinha Pré-História</figcaption>
                      </figure>
                      <figure>
                        <img src="../img/idadeantigacruz.png" alt="Descrição da imagem">
                        <figcaption>Cruzadinha Idade Antiga</figcaption>
                      </figure>
                      <figure>
                        <img src="../img/idademediacruz.png" alt="Descrição da imagem">
                        <figcaption>Cruzadinha Idade Média</figcaption>
                      </figure>
                      <figure>
                        <img src="../img/idademodernacruz.png" alt="Descrição da imagem">
                        <figcaption>Cruzadinha Idade Moderna</figcaption>
                      </figure>
                      <figure>
                        <img src="../img/idadecontemporaneacruz.png" alt="Descrição da imagem" >
                        <figcaption>Cruzadinha Idade Contemporânea</figcaption>
                      </figure>
                </div>
                <img src="" alt="">
            </div>
        </section>
            <!-- Seção da Pré-História -->
            <section id="pre-historia" class="atividades-pdf">
                <h2>Atividades da Pré-História</h2>
                <div class="img-legend">
                    <img src="../img/prehistoriacuz.png" alt="Cruzadinha Pré-História" style="cursor: pointer;" onclick="mostrarOpcoes('pre-historia-options')">
                    <legend>Cruzadinha Pré-História</legend>
                </div>
                <div id="pre-historia-options" class="opcoes" style="display: none;">
                    <h3>Escolha uma opção:</h3>
                    <button onclick="window.open('https://interacty.me/projects/c066f4abff3a4b94')">Acessar Online</button>
                    <a href="../Cruzadinha - Pré-História.pdf" target="_blank">Baixar PDF</a>
                </div>
            </section>
    
            <!-- Seção da Idade Antiga -->
            <section id="idade-antiga" class="atividades-pdf">
                <h2>Atividades da Idade Antiga</h2>
                <img src="../img/idadeantigacruz.png" alt="Cruzadinha Idade Antiga" style="cursor: pointer;" onclick="mostrarOpcoes('idade-antiga-options')">
                <legend>Cruzadinha Idade Antiga</legend>
                <div id="idade-antiga-options" class="opcoes" style="display: none;">
                    <h3>Escolha uma opção:</h3>
                    <button onclick="window.open('https://interacty.me/projects/3c4560a86c201a66')">Acessar Online</button>
                    <button onclick="baixarPDF('../Cruzadinha - Idade Antiga.pdf', 'Cruzadinha - Idade Antiga')">Baixar PDF</button>
                </div>
            </section>
    
            <!-- Seção da Idade Média -->
            <section id="idade-media" class="atividades-pdf">
                <h2>Atividades da Idade Média</h2>
                <img src="../img/idademediacruz.png" alt="Cruzadinha Idade Média" style="cursor: pointer;" onclick="mostrarOpcoes('idade-media-options')">
                <legend>Cruzadinha Idade Média</legend>
                <div id="idade-media-options" class="opcoes" style="display: none;">
                    <h3>Escolha uma opção:</h3>
                    <button onclick="window.open('https://interacty.me/projects/61804cf72d599d6a')">Acessar Online</button>
                    <button onclick="baixarPDF('../Cruzadinha - Idade Média.pdf', 'Cruzadinha - Idade Média.pdf')">Baixar PDF</button>
                </div>
            </section>
            <!-- Seção da Idade Moderna -->
            <section id="idade-moderna" class="atividades-pdf">
                <h2>Atividades da Idade Moderna</h2>
                <img src="../img/idademodernacruz.png" alt="Cruzadinha Idade Moderna" style="cursor: pointer;" onclick="mostrarOpcoes('idade-moderna-options')">
                <legend>Cruzadinha Idade Moderna</legend>
                <div id="idade-moderna-options" class="opcoes" style="display: none;">
                    <h3>Escolha uma opção:</h3>
                    <button onclick="window.open('https://interacty.me/projects/8827cef2cb99b65e')">Acessar Online</button>
                    <button onclick="baixarPDF('../Cruzadinha - Idade Moderna.pdf', 'Cruzadinha - Idade Moderna.pdf')">Baixar PDF</button>
                </div>
            </section>
    
            <!-- Seção da Idade Contemporânea -->
            <section id="idade-contemporanea" class="atividades-pdf">
                <h2>Atividades da Idade Contemporânea</h2>
                <img src="../img/idadecontemporaneacruz.png" alt="Cruzadinha Idade Contemporânea" style="cursor: pointer;" onclick="mostrarOpcoes('idade-contemporanea-options')">
                <legend>Cruzadinha Idade Moderna</legend>
                <div id="idade-contemporanea-options" class="opcoes" style="display: none;">
                    <h3>Escolha uma opção:</h3>
                    <button onclick="window.open('https://interacty.me/projects/22ad3bea92410e8e')">Acessar Online</button>
                    <button onclick="baixarPDF('../Cruzadinha - Idade Contemporânea.pdf', 'Cruzadinha - Idade Contemporânea.pdf')">Baixar PDF</button>
                </div>            </section>
    </main>

    <footer>
        <div class="container">
            <p>© 2024 SESI CAÇAPAVA e SENAI TAUBATÉ</p>
            <p>Desenvolvido por: SOFTDEV</p>
            <nav class="footer-menu">
                <ul>
                    <li><a href="#">Termos de Uso</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>

</html>
