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
    <link rel="stylesheet" href="../css/idade_moderna.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="../javascript/idade_moderna.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <script src="https://kit.fontawesome.com/6e028b1004.js" crossorigin="anonymous" defer></script>
</head>

<title>Idade Moderna</title>

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
    <section id="introducao">
            <div class="video">
                <video id="meuVideo" src="../video/video-idade-moderna.mov" autoplay loop muted></video>
            </div>
            <div class="titulo">
                <h1>IDADE MODERNA</h1>
                <p>A Idade Moderna é marcada por grandes mudanças sociais, políticas e culturais.</p>
                <a href="#acontecimentos"><button id="saiba-mais">Saiba Mais</button></a>
            </div>
        </section>

        <section id="acontecimentos" class="acontecimentos">
    <div class="container">
        <h2>Fatos Marcantes da Idade Moderna</h2>
        <div class="itens-grid">
            <a>
                <div class="item">
                    <img src="../img/renascimento.jfif" alt="Renascimento">
                    <h3>Renascimento</h3>
                    <p>Movimento cultural e artístico que ressurgiu na Europa, caracterizado pelo retorno aos valores clássicos da Antiguidade e pela valorização do conhecimento, da ciência e da arte.</p>
                </div>
            </a>
            <a>
                <div class="item">
                    <img src="../img/reformapt.jfif" alt="Reformas Religiosas">
                    <h3>Reformas Religiosas</h3>
                    <p>Movimentos como a Reforma Protestante desafiaram a autoridade da Igreja Católica e levaram a mudanças significativas nas práticas e crenças religiosas da Europa.</p>
                </div>
            </a>
            <a>
                <div class="item">
                    <img src="../img/feudalismo.png" alt="Grandes Navegações">
                    <h3>Grandes Navegações</h3>
                    <p>Expansão marítima que levou à descoberta de novas rotas comerciais e territórios, impulsionando o intercâmbio cultural e econômico entre os continentes.</p>
                </div>
            </a>
            <a>
                <div class="item">
                    <img src="../img/iluminismo.webp" alt="Iluminismo">
                    <h3>Iluminismo</h3>
                    <p>Movimento intelectual que promovia a razão e o pensamento crítico, questionando as instituições e os valores tradicionais e pavimentando o caminho para a modernidade.</p>
                </div>
            </a>
        </div>
        <a href="#linhaTempo"><button id="saiba-mais">Saiba Mais</button></a>
    </div>
 </section>
 <section id="linhaTempo">
            <div class="titulo-linhaTempo">
                <h1>LINHA DO TEMPO</h1>
                <hr>
                <p>Principais Eventos</p>
            </div>
            <div class="timeline">
                <ul>
                    <li>
                        <div class="content">
                            <h3>Queda de Constantinopla</h3>
                            <p>O Império Bizantino cai para os turcos otomanos, encerrando a Idade Média e impulsionando a busca por novas rotas comerciais para o Oriente.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1453</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/constantinopla.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Descobrimento da América</h3>
                            <p>Cristóvão Colombo chega ao continente americano, marcando o início das grandes navegações e do colonialismo europeu nas Américas.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1492</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/descoberta-ame.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Reforma Protestante</h3>
                            <p>Martinho Lutero publica suas 95 Teses na Alemanha, iniciando a Reforma Protestante, que leva a profundas mudanças religiosas e políticas na Europa.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1517</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/reforma.webp" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Publicação de "De revolutionibus orbium coelestium" por Copérnico</h3>
                            <p>O astrônomo Nicolau Copérnico propõe a teoria heliocêntrica, desafiando o sistema geocêntrico vigente e marcando o início da Revolução Científica.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1543 </h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/heliocentrismo.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3> Derrota da Armada Invencível</h3>
                            <p>A derrota da poderosa frota espanhola pela Inglaterra marca o declínio da hegemonia espanhola e o crescimento do poderio naval inglês.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1588</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/derrota-invencivel.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Início do uso do telescópio por Galileu Galilei</h3>
                            <p>Galileu aperfeiçoa o telescópio e faz observações astronômicas que confirmam a teoria heliocêntrica, contribuindo para a Revolução Científica.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1609</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/telescopio-galilei.jpg" alt="Imagem de Galileu Galilei usando o telescópio">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Paz de Vestfália</h3>
                            <p>Tratados que encerram a Guerra dos Trinta Anos e redefinem as fronteiras e a política europeia, estabelecendo os princípios da soberania nacional.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1648</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/paz-de-vest.jpg" alt="Imagem da assinatura da Paz de Vestfália">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Publicação de "Princípios Matemáticos da Filosofia Natural" por Isaac Newton</h3>
                            <p>Newton formula as leis do movimento e da gravitação universal, consolidando a Revolução Científica.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1687</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/filosofia-newton.jpg" alt="Imagem de Isaac Newton e seu livro Principia">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Declaração de Independência dos Estados Unidos</h3>
                            <p>A colônia americana declara independência da Grã-Bretanha, inspirando movimentos de liberdade e independência em outras partes do mundo.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1776</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/independencia_eua.jpg" alt="Imagem da Declaração de Independência dos Estados Unidos">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Revolução Francesa</h3>
                            <p>Movimento revolucionário que transformou radicalmente a sociedade francesa, inspirando mudanças sociais e políticas em todo o mundo.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1789</h4>
                        </div>
                        <div class="img-esquerda">
                        <img src="../img/revolucao-francesa.webp" alt="">
                        </div>
                    </li>
                    <div style="clear:both;"> </div>
                </ul>
            </div>
        </section>
 <section id="section-videos">
                <h2>Material de estudo</h2>
                <div class="videos">
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/AZH-k7SujXY" title="Idade Moderna | Introdução" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    
                    </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/aVQ_1srdzK4" title="Revolução Industrial - Toda Matéria" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/fxqxH5A3Ok8?si=Qklv_S8QWY9ddIhY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    
                    </div>
                    <div class="video-estudo">
                         <iframe width="100%" height="330" src="https://www.youtube.com/embed/mH4pewaB_Fo?si=FNvQ7zhgG60VxmKy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    
                    </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/pThrXiEgUl8?si=dM9Hd1nDPuk30kzI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    
                    </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/5jrGMeGYc3w?si=5B67KhqOebLkBww2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    
                    </div>
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
        <a href="faq.php">FAQ</a></li>


        <div class="footer-bottom">
            <p>&copy; 2024 História em Foco. Todos os direitos reservados.</p>
        </div>
        </footer>

</body>

</html>