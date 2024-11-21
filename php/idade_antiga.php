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
    <title>Idade Antiga</title>
    <link rel="stylesheet" href="../css/idade_antiga.css">
    <script src="../javascript/idade_antiga.js" defer></script>
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
         <section id="introducao">
            <div class="video">
                <video id="meuVideo" src="../video/idade_antiga.mp4" autoplay loop muted></video>
            </div>
            <div class="titulo">
                <h1>IDADE ANTIGA</h1>
                <p>A Idade Antiga é o período em que surgiram as primeiras grandes civilizações e a escrita</p>
                <a href="#acontecimentos"><button id="saiba-mais">Saiba Mais</button></a>
            </div>
        </section>

        <section id="acontecimentos" class="acontecimentos">
            <div class="container">
                <h2>Fatos Marcantes da Idade Antiga</h2>
                <div class="itens-grid">
                    <a>
                        <div class="item">
                            <img src="../img/piramide.webp" alt="Pirâmides do Egito">
                            <h3>Construção das Pirâmides</h3>
                            <p>As pirâmides do Egito, construídas como túmulos para os faraós, são um dos maiores feitos arquitetônicos da Idade Antiga e representam o poder e as crenças religiosas egípcias.</p>
                        </div>
                    </a>
                    <a>
                        <div class="item">
                            <img src="../img/democracia.webp" alt="democracia">
                            <h3>Nascimento da Democracia</h3>
                            <p>A Grécia Antiga, especialmente Atenas, foi o berço da democracia, onde cidadão podiam participar nas decisões políticas, influenciando os conceitos de governança até os dias de hoje.</p>
                        </div>
                    </a>
                    <a>
                        <div class="item">
                            <img src="../img/hamurabi.webp" alt="Código de Hamurabi">
                            <h3>Código de Hamurabi</h3>
                            <p>Considerado um dos primeiros conjuntos de leis escritas, o Código de Hamurabi estabeleceu regras para a vida social na Mesopotâmia.</p>
                        </div>
                    </a>
                    <a>
                        <div class="item">
                            <img src="../img/impc3a9rio-romano.gif" alt="Império Romano">
                            <h3>Expansão do Império Romano</h3>
                            <p>Roma expandiu-se e criou um dos maiores impérios da história, unificando culturas, expandindo comércio e promovendo avanços na engenharia, direito e organização social.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- <img id="img-central" src="../img/civilizacoes-da-idade-antiga.jpg" alt="Civilizações da Idade Antiga"> -->
        <!-- <div id="conteudo">
            <p>A Idade Antiga compreende o período que se inicia com o surgimento da escrita, por volta de 3.500 a.C., e vai até a queda do Império Romano do Ocidente, em 476 d.C.</p>
            <p>Na Idade Antiga, surgiram as primeiras cidades organizadas, impérios e estados centralizados, além das primeiras formas de governo, religião estruturada, escrita e avanços na ciência e nas artes.</p>
            <p>As principais civilizações desse período foram: Egito, Mesopotâmia, Persas, Grécia e Roma, cada uma delas com contribuições marcantes para a história humana.</p>

        </div> -->

        <section id="povos">
        <div id="conteudo">
            <div id="parte1">
                <img id="img-central" src="../img/civilizacoes-da-idade-antiga.jpg" alt="Civilizações da Idade Antiga">
                <div>
                    <h2>Grandes Civilizações</h2>
                    <p>A Idade Antiga compreende o período que se inicia com o surgimento da escrita, por volta de 3.500 a.C., e vai até a queda do Império Romano do Ocidente, em 476 d.C.<br>Na Idade Antiga, surgiram as primeiras cidades organizadas, impérios e estados centralizados, além das primeiras formas de governo, religião estruturada, escrita e avanços na ciência e nas artes.<br>As principais civilizações desse período foram: Egito, Mesopotâmia, Persas, Grécia e Roma, cada uma delas com contribuições marcantes para a história humana.</p>
                </div>
            </div>
            <div id="parte2">
            <div class="civilizations-container">
            <ul class="civilizations-list">
                <li>
                    <button class="civilization-btn">Civilização Egípcia</button>
                    <div class="civilization-content" style="display: none;">
                        <div class="textos-civilizacao">
                            <h2 class="civilization-name">Civilização Egípcia</h2>
                            <p>A civilização egípcia, situada ao longo do Nilo, teve uma sociedade hierarquizada sob o comando dos faraós. Desenvolveram as pirâmides como túmulos, a escrita hieroglífica, e uma religião politeísta com forte crença na vida após a morte.</p>
                        </div>
                        <img id="img-piramide" src="../img/piramide.webp" alt="Pirâmides do Egito">
                    </div>
                </li>

                <li>
                    <button class="civilization-btn">Civilização Mesopotâmica</button>
                    <div class="civilization-content" style="display: none;">
                    <div class="textos-civilizacao">
                        <h2 class="civilization-name">Civilização Mesopotâmica</h2>
                        <p>Entre os rios Tigre e Eufrates, surgiram civilizações como os sumérios e babilônios. Inovaram com a escrita cuneiforme, o Código de Hamurabi e zigurates, e tinham uma religião politeísta ligada à natureza.</p>
                    </div>
                        <img id="img-escrita" src="../img/escrita-cuneiforme.jpg" alt="Escrita Cuneiforme da Mesopotâmia">
                    </div>
                </li>

                <li>
                    <button class="civilization-btn">Civilização Persa</button>
                    <div class="civilization-content" style="display: none;">
                        <div class="textos-civilizacao">
                            <h2 class="civilization-name">Civilização Persa</h2>
                            <p>O Império Persa, fundado por Ciro, destacou-se por sua administração eficiente e o Zoroastrismo. Valorizavam a arte e arquitetura, como visto em Persépolis, e mantinham uma política de tolerância com culturas conquistadas.</p>
                        </div>
                        <img id="img-imperio" src="../img/5milpersas.jpg" alt="Império Persa">
                    </div>
                </li>

                <li>
                    <button class="civilization-btn">Civilização Grega</button>
                    <div class="civilization-content" style="display: none;">
                        <div class="textos-civilizacao">
                            <h2 class="civilization-name">Civilização Grega</h2>
                            <p>A Grécia Antiga contribuiu com a democracia, filosofia, ciência, arte e mitologia. Atenas foi o berço da democracia, enquanto figuras como Sócrates e Aristóteles influenciaram a filosofia ocidental.</p>
                        </div>
                        <img id="img-templo" src="../img/templo-grego.jpeg" alt="Templo Grego">
                    </div>
                </li>

                <li>
                    <button class="civilization-btn">Civilização Romana</button>
                    <div class="civilization-content" style="display: none;">
                        <div class="textos-civilizacao">
                            <h2 class="civilization-name">Civilização Romana</h2>
                            <p>O Império Romano se destacou pelo direito, conquistas militares e infraestrutura. Construíram uma vasta rede de estradas e aquedutos e, no final, adotaram o cristianismo como religião oficial.</p>
                        </div>
                        <img id="img-coliseu" src="../img/coliseu.jpg" alt="Coliseu Romano">
                    </div>
                </li>
            </ul>
        </div>
            </div>
        </div>

        <!-- <h2 class="civilizations-title">Civilizações da Idade Antiga</h2> -->

        
        </section>

        <section id="linhaTempo">
    <div class="titulo-linhaTempo">
        <h1>LINHA DO TEMPO</h1>
        <hr>
        <p>Principais Eventos da Idade Antiga</p>
    </div>
    <div class="timeline">
        <ul>
            <!-- Evento 1 -->
            <li>
                <div class="content">
                    <h3>Fundação de Roma</h3>
                    <p>De acordo com a lenda, Roma foi fundada em 753 a.C. por Rômulo e Remo, dando início à civilização romana.</p>
                </div>
                <div class="time">
                    <h4>Ano 753 a.C.</h4>
                </div>
                <div class="img-direita">
                    <img src="../img/fundacao-roma.png" alt="Imagem da fundação de Roma">
                </div>
            </li>
            <!-- Evento 2 -->
            <li>
                <div class="content">
                    <h3>As Guerras Médicas</h3>
                    <p>Entre 490 e 479 a.C., as cidades-estado gregas lutaram contra o Império Persa, resultando na vitória grega e no fortalecimento da democracia ateniense.</p>
                </div>
                <div class="time">
                    <h4>490 - 479 a.C.</h4>
                </div>
                <div class="img-esquerda">
                    <img src="../img/guerras-medicas.png" alt="Imagem das Guerras Médicas">
                </div>
            </li>
            <!-- Evento 3 -->
            <li>
                <div class="content">
                    <h3>Período de Ouro de Atenas</h3>
                    <p>Durante o século V a.C., Atenas viveu um período de grande prosperidade cultural, artístico e político, liderado por Pericles.</p>
                </div>
                <div class="time">
                    <h4> 461 - 429 a.C.</h4>
                </div>
                <div class="img-direita">
                    <img src="../img/atenas-ouro.jpg" alt="Imagem de Atenas no período de ouro">
                </div>
            </li>
            <!-- Evento 4 -->
            <li>
                <div class="content">
                    <h3>Conquista de Alexandre, o Grande</h3>
                    <p>Alexandre, o Grande, conquista vastos territórios, desde a Grécia até o norte da Índia, espalhando a cultura grega pelo mundo conhecido.</p>
                </div>
                <div class="time">
                    <h4>336 - 323 a.C.</h4>
                </div>
                <div class="img-esquerda">
                    <img src="../img/alexandre-grande.jpg" alt="Imagem de Alexandre, o Grande">
                </div>
            </li>
            <!-- Evento 5 -->
            <li>
                <div class="content">
                    <h3>Assassinato de Júlio César</h3>
                    <p>O ditador romano Júlio César é assassinado por seus próprios senadores, o que marca o fim da República Romana e o início do Império Romano.</p>
                </div>
                <div class="time">
                    <h4>Ano 44 a.C.</h4>
                </div>
                <div class="img-direita">
                    <img src="../img/julio-cesar.png" alt="Imagem do assassinato de Júlio César">
                </div>
            </li>
            <!-- Evento 6 -->
            <li>
                <div class="content">
                    <h3>Augusto torna-se Imperador</h3>
                    <p>O imperador Augusto se torna o primeiro imperador de Roma, dando início ao Império Romano e a um longo período de paz chamado Pax Romana.</p>
                </div>
                <div class="time">
                    <h4>Ano 27 a.C.</h4>
                </div>
                <div class="img-esquerda">
                    <img src="../img/augusto-imperador.jpg" alt="Imagem de Augusto se tornando imperador">
                </div>
            </li>
            <!-- Evento 7 -->
            <li>
                <div class="content">
                    <h3>Destruição de Pompéia</h3>
                    <p>O vulcão Vesúvio entra em erupção em 79 d.C., destruindo a cidade romana de Pompéia e preservando-a sob uma camada de cinzas.</p>
                </div>
                <div class="time">
                    <h4>Ano 79 d.C.</h4>
                </div>
                <div class="img-direita">
                    <img src="../img/pompeia.jpg" alt="Imagem de Pompéia destruída">
                </div>
            </li>
            <!-- Evento 8 -->
            <li>
                <div class="content">
                    <h3>Cristianismo se torna religião oficial do Império Romano</h3>
                    <p>Em 380 d.C., o imperador Teodósio I torna o Cristianismo a religião oficial do Império Romano, marcando a ascensão do cristianismo como força dominante no império.</p>
                </div>
                <div class="time">
                    <h4>Ano 380 d.C.</h4>
                </div>
                <div class="img-esquerda">
                    <img src="../img/cristianismo-império-romano.jpg" alt="Imagem do Cristianismo no Império Romano">
                </div>
            </li>
            <!-- Evento 9 -->
            <li>
                <div class="content">
                    <h3>O Império Romano se divide</h3>
                    <p>Em 395 d.C., o Império Romano é dividido em duas partes: o Império Romano do Ocidente e o Império Romano do Oriente.</p>
                </div>
                <div class="time">
                    <h4>Ano 395 d.C.</h4>
                </div>
                <div class="img-direita">
                    <img src="../img/divisao-imperio-romano.jpg" alt="Imagem da divisão do Império Romano">
                </div>
            </li>
            <!-- Evento 10 -->
            <li>
                <div class="content">
                    <h3>Início da Idade das Trevas</h3>
                    <p>Com a queda do Império Romano do Ocidente em 476 d.C., o mundo ocidental entra em um período de instabilidade e declínio cultural conhecido como Idade das Trevas.</p>
                </div>
                <div class="time">
                    <h4>Ano 476 d.C.</h4>
                </div>
                <div class="img-esquerda">
                    <img src="../img/idade-das-trevas.jpg" alt="Imagem representando a Idade das Trevas">
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
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/HU08s_nrOzw" title="Idade Antiga | Introdução" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    
		            </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/Hko3IGt-VzA" title="Idade Antiga - 1º ano História, Ensino Médio" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/qtCgTTxU4pI" title="Idade Antiga" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/CEMMtJ0xMfs" title="EGITO ANTIGO (ANTIGUIDADE ORIENTAL) | Resumo de História para o Enem" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/4j7WKEXL0tQ?list=PLRwlG59Lv5IyVHPh8ZviJFqzHfohdrA2K" title="HISTÓRIA GERAL #1 MESOPOTÂMIA: (FORMAÇÃO, POLÍTICA E ECONOMIA)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/TNmwlPfSRR0" title="A História do Egito Antigo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
        <a href="faq.php">Perguntas Frequentes</a></li>


        <div class="footer-bottom">
            <p>&copy; 2024 História em Foco. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>