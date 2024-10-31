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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="../javascript/atividades.css" defer></script>
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
                        <a href="#">Períodos Históricos</a>
                        <div class="dropdown-menu">
                            <a href="#">Pré-História</a>
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
                            <p><?= $_SESSION['nome_sessao'] ?></p>
                            <p><?=$_SESSION['tipo_sessao'] ?></p>
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
                            <h2>Idade Contemporânea</h2>
                            <p>Descubra as mais novas transformações do nosso mundo. Prepare-se para atividades que conectam o passado ao presente!</p>
                            <a href="#idade-contemporanea" class="read-more"><span class="sr-only">Confira as atividades da Idade Contemporânea</span></a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <section id="nossasatividades">
            <div id="atividadestitulo">
                <h1>Nossas Atividades</h1>
                <h3>Aqui você pode conferir todas nossas atividades de acordo com seu tipo!</h3>
            </div>
            <div id="cruzadinhas">
                <div class="img-legend">
                    <div class="img-container">
                        <img src="../img/prehistoriacuz.png" alt="Cruzadinha Pré-História" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/c066f4abff3a4b94')">Acessar Online</button>
                            <a href="../Cruzadinha - Pré-História.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <legend>Cruzadinha Pré-História</legend>
                </div>
                <div class="img-legend">
                    <div class="img-container">
                        <img src="../img/idadeantigacruz.png" alt="Cruzadinha Idade Antiga" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/3c4560a86c201a66')">Acessar Online</button>
                            <a href="../Cruzadinha - Idade Antiga.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <legend>Cruzadinha Idade Antiga</legend>
                </div>
                <div class="img-legend">
                    <div class="img-container">
                        <img src="../img/idademediacruz.png" alt="Cruzadinha Idade Média" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/61804cf72d599d6a')">Acessar Online</button>
                            <a href="../Cruzadinha - Idade Média.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <legend>Cruzadinha Idade Média</legend>
                </div>
                 <div class="img-legend">
                    <div class="img-container">
                         <img src="../img/idademodernacruz.png" alt="Cruzadinha Idade Moderna" class="imagem">
                         <div class="opcoes">
                             <button onclick="window.open('https://interacty.me/projects/8827cef2cb99b65e')">Acessar Online</button>
                             <a href="../Cruzadinha - Idade Moderna.pdf" download>Baixar PDF</a>
                         </div>
                    </div>
                    <legend>Cruzadinha Idade Moderna</legend>
                </div>
                <div class="img-legend">
                   <div class="img-container">
                        <img src="../img/idadecontemporaneacruz.png" alt="Cruzadinha Idade Contemporânea" class="imagem">
                        <div class="opcoes">
                            <button onclick="window.open('https://interacty.me/projects/22ad3bea92410e8e')">Acessar Online</button>
                            <a href="../Cruzadinha - Idade Contemporânea.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <legend>Cruzadinha Idade Contemporânea</legend>
                </div>  
            </div> 
            <div id="caca-palavras">
                <div class="img-legend">
                    <div class="img-container">
                    <img src="../img/Imagem Pré História.png" alt="Cruzadinha Pré-História" class="imagem">
                        <div class="opcoes">
                        <a href="../pdfs/Caça Palavras - Pré-História.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <legend>Caça Palavras Pré-História</legend>
                </div>
                <div class="img-legend">
                    <div class="img-container">
                    <img src="../img/Imagem Idade Antiga.png" alt="" class="imagem">
                        <div class="opcoes">
                        <a href="../pdfs/Caça Palavras - Idade Antiga.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <legend>Caça Palavras Idade Antiga</legend>
                </div>
                <div class="img-legend">
                    <div class="img-container">
                    <img src="../img/Imagem Idade Média.png" alt="" class="imagem">
                        <div class="opcoes">
                        <a href="../pdfs/Caça Palavras - Idade Média.pdf" download>Baixar PDF</a>
                        </div>
                    </div>
                    <legend>Caça Palavras Idade Média</legend>
                </div>
                 <div class="img-legend">
                    <div class="img-container">
                    <img src="../img/Imagem Idade Moderna.png" alt="" class="imagem">
                    <div class="opcoes">
                    <a href="../pdfs/Caça Palavras - Idade Moderna.pdf" download>Baixar PDF</a>
                    </div>
                    </div>
                    <legend>Caça Palavras Idade Moderna</legend>
                </div>
                <div class="img-legend">
                   <div class="img-container">
                   <img src="../img/Imagem Contêmporanea.png" alt="Cruzadinha Pré-História" class="imagem">
                   <div class="opcoes">
                   <a href="../pdfs/Caça Palavras - Idade Contemporânea.pdf" download>Baixar PDF</a>
                   </div>
                    </div>
                    <legend>Caça Palavras Idade Contemporânea</legend>
                </div>  
            </div>      
        </section>
            <!-- Seção da Pré-História -->
<section id="pre-historia" class="atividades-pdf">
    <h2>Atividades da Pré-História</h2>
    <div class="img-legend">
        <div class="img-container">
            <img src="../img/prehistoriacuz.png" alt="Cruzadinha Pré-História" class="imagem">
            <div class="opcoes">

                <button onclick="window.open('https://interacty.me/projects/c066f4abff3a4b94')">Acessar Online</button>
                <a href="../Cruzadinha - Pré-História.pdf" download>Baixar PDF</a>
            </div>
        </div>
        <legend>Cruzadinha Pré-História</legend>
    </div>
</section>
          <!-- Seção da Idade Antiga -->
<section id="idade-antiga" class="atividades-pdf">
    <h2>Atividades da Idade Antiga</h2>
    <div class="img-legend">
        <div class="img-container">
            <img src="../img/idadeantigacruz.png" alt="Cruzadinha Idade Antiga" class="imagem">
            <div class="opcoes">
                <button onclick="window.open('https://interacty.me/projects/3c4560a86c201a66')">Acessar Online</button>
                <a href="../Cruzadinha - Idade Antiga.pdf" download>Baixar PDF</a>
            </div>
        </div>
        <legend>Cruzadinha Idade Antiga</legend>
    </div>
</section>


<!-- Seção da Idade Média -->
<section id="idade-media" class="atividades-pdf">
    <h2>Atividades da Idade Média</h2>
    <div class="img-legend">
        <div class="img-container">
            <img src="../img/idademediacruz.png" alt="Cruzadinha Idade Média" class="imagem">
            <div class="opcoes">
                <button onclick="window.open('https://interacty.me/projects/61804cf72d599d6a')">Acessar Online</button>
                <a href="../Cruzadinha - Idade Média.pdf" download>Baixar PDF</a>
            </div>
        </div>
        <legend>Cruzadinha Idade Média</legend>
    </div>
</section>


<!-- Seção da Idade Moderna -->
<section id="idade-moderna" class="atividades-pdf">
    <h2>Atividades da Idade Moderna</h2>
    <div class="img-legend">
        <div class="img-container">
            <img src="../img/idademodernacruz.png" alt="Cruzadinha Idade Moderna" class="imagem">
            <div class="opcoes">
                <button onclick="window.open('https://interacty.me/projects/8827cef2cb99b65e')">Acessar Online</button>
                <a href="../Cruzadinha - Idade Moderna.pdf" download>Baixar PDF</a>
            </div>
        </div>
        <legend>Cruzadinha Idade Moderna</legend>
    </div>
</section>
<!-- Seção da Idade Contemporânea -->
<section id="idade-contemporanea" class="atividades-pdf">
    <h2>Atividades da Idade Contemporânea</h2>
    <div class="img-legend">
        <div class="img-container">
        <img src="../img/idadecontemporaneacruz.png" alt="" class="imagem">
        <div class="opcoes">
                <button onclick="window.open('https://interacty.me/projects/22ad3bea92410e8e')">Acessar Online</button>
                <a href="../Cruzadinha - Idade Contemporânea.pdf" download>Baixar PDF</a>
            </div>
        </div>
        <legend>Cruzadinha Idade Contemporânea</legend>
    </div>
</section>
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
