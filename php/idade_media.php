<?php
include_once('conexao.php');
session_start();

// if (!isset($_SESSION['nome_sessao'])) {
//     header('Location: index.php');
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/idade_media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="../javascript/idade_media.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <script src="https://kit.fontawesome.com/6e028b1004.js" crossorigin="anonymous" defer></script>

</head>
<title>Idade Média</title>
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
                <video id="meuVideo" src="../video/idade-media.mp4" autoplay loop muted></video>
            </div>
            <div class="titulo">
                <h1>IDADE MÉDIA</h1>
                <p>A Idade Média é o período da história entre a queda do Império Romano e o início da Idade Moderna</p>
                <a href="#acontecimentos"><button id="saiba-mais">Saiba Mais</button></a>
            </div>
        </section>
        <section id="acontecimentos" class="acontecimentos">
            <div class="container">
            <h1 id="titulo-caracteristicas">PRINCIPAIS CARACTERÍSTICAS</h1>
                <div class="itens-grid">
                    <a>
                        <div class="fato">
                            <img src="../img/feudalismo.png" alt="Pintura Rupestre">
                            <h3>Feudalismo</h3>
                            <p>O feudalismo foi um sistema econômico, político e social que predominou na Europa Ocidental durante a Idade Média.</p>
                        </div>
                    </a>
                    <a>
                        <div class="fato">
                            <img src="../img/cruzadas.png" alt="evolucaohumana">
                            <h3>Cruzadas</h3>
                            <p>As Cruzadas foram expedições militares promovidas pela Igreja Católica com o objetivo de retomar Jerusalém.</p>
                        </div>
                    </a>
                    <a>
                        <div class="fato">
                            <img src="../img/inquisição.png" alt="ferramentas">
                            <h3>Inquisição</h3>
                            <p>A Inquisição foi uma instituição criada pela Igreja Católica para combater heresias e preservar a ortodoxia cristã.</p>
                        </div>
                    </a>
                        <div class="fato">
                            <img src="../img/peste-negra.png" alt="aldeias">
                            <h3>Peste Negra</h3>
                            <p>A Peste Negra foi uma pandemia devastadora no século XIV, matando milhões de pessoas.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section id="caracteristicas">
            <div class="carrossel-container">
                <div class="carrossel">
                    <div class="item">
                        <img src="../img/feudalismo.png" alt="">
                        <div class="conteudo">
                            <h1>Feudalismo</h1>
                            <p>O feudalismo foi um sistema econômico, político e social que predominou na Europa Ocidental durante a Idade Média, aproximadamente entre os séculos IX e XV. Esse sistema foi caracterizado pela descentralização do poder, onde a autoridade real era fraca, e o poder era concentrado por nobres que controlavam terras e tinham autonomia local. As principais características do feudalismo incluem a organização em feudos (territórios administrados por senhores feudais), o sistema de vassalagem e a economia agrária.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../img/cruzadas.png" alt="">
                        <div class="conteudo">
                            <h1>Cruzadas</h1>
                            <p>As Cruzadas foram expedições militares promovidas pela Igreja Católica entre os séculos XI e XIII, com o objetivo inicial de reconquistar Jerusalém e a Terra Santa, que estavam sob domínio muçulmano. No entanto, as motivações das Cruzadas iam além da religiosidade e incluíam interesses políticos, econômicos e sociais. As Cruzadas envolveram principalmente a Europa Ocidental e o Oriente Médio e tiveram grandes repercussões na sociedade medieval. A principal motivação das Cruzadas era recuperar lugares sagrados para o cristianismo.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../img/inquisição.png" alt="">
                        <div class="conteudo">
                            <h1>Iniquisição</h1>
                            <p>A Inquisição foi uma instituição criada pela Igreja Católica na Idade Média com o objetivo de combater heresias e preservar a ortodoxia da fé cristã. Ela foi estabelecida oficialmente em 1231 pelo Papa Gregório IX, mas suas origens datam do século XII, quando começaram a surgir movimentos considerados heréticos pela Igreja, como os cátaros e os valdenses. A Inquisição se tornou famosa pelo uso de julgamentos, interrogatórios e punições para identificar e punir os chamados "hereges" — pessoas que defendiam ideias contrárias às doutrinas oficiais da Igreja. </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../img/peste-negra.png" alt="">
                        <div class="conteudo">
                            <h1>Peste Negra</h1>
                            <p>A Peste Negra (ou Peste Bubônica) foi uma pandemia devastadora que assolou a Europa, Ásia e o norte da África no século XIV, entre os anos de 1347 e 1351. Ela foi uma das epidemias mais letais da história, causando a morte de aproximadamente 75 a 200 milhões de pessoas, ou cerca de um terço da população europeia da época. A forma mais comum, caracterizada por inchaços dolorosos (bubões) nas axilas, virilha e pescoço, febre alta, dores no corpo e fraqueza. A taxa de mortalidade dessa forma era alta. Acredita-se que a peste tenha começado na Ásia Central, possivelmente na região da Mongólia.</p>
                        </div>
                    </div>
                </div>
                <div class="controladores">
                    <button class="setas" onclick="move(-1)" id="prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                    <button class="setas" onclick="move(1)" id="next"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>
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
                            <h3>Queda do Império Romano do Ocidente</h3>
                            <p>Início simbólico da Idade Média, com a queda de Roma e o fim do Império Romano do Ocidente, marcando o começo do feudalismo e da fragmentação da Europa.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 476 d.C.</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/fabricas-idade-contemporane.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Formação dos Reinos Bárbaros</h3>
                            <p>Diversos povos germânicos, como os visigodos, francos e lombardos, estabelecem reinos na Europa. A cultura romana mescla-se com as tradições desses povos.</p>
                        </div>
                        <div class="time">
                            <h4>Século V a VIII</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/barbaros.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Coroação de Carlos Magno</h3>
                            <p>Carlos Magno é coroado Imperador do Sacro Império Romano-Germânico pelo Papa, marcando o renascimento de um império cristão na Europa Ocidental.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 800 d.C.</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/corocao carlos.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Invasões Vikings, Sarracenas e Húngaras</h3>
                            <p>A Europa sofre ataques constantes dos vikings no norte, dos sarracenos (muçulmanos) no sul e dos húngaros no leste, o que reforça a necessidade de sistemas de defesa, fortalecendo o feudalismo.</p>
                        </div>
                        <div class="time">
                            <h4>Séculos IX a X</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/Invasoes.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Primeira Cruzada</h3>
                            <p>Convocada pelo Papa Urbano II, a Primeira Cruzada marca o início de várias expedições militares para retomar Jerusalém dos muçulmanos, desencadeando uma série de conflitos religiosos e culturais.</p>
                        </div>
                        <div class="time">
                            <h4>Ano de 1095</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/primeira_cruzada.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Renascimento Comercial e Urbano</h3>
                            <p>O comércio volta a crescer e as cidades começam a se desenvolver, principalmente na Itália e nos Países Baixos, marcando o surgimento de uma nova classe social: a burguesia.</p>
                        </div>
                        <div class="time">
                            <h4>Século XII</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/burguesia.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Carta Magna</h3>
                            <p>Na Inglaterra, o rei João Sem Terra é forçado a assinar a Carta Magna, limitando o poder real e estabelecendo direitos para os barões, um marco importante na história das constituições.</p>
                        </div>
                        <div class="time">
                            <h4>Ano de 1215</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/carta_magna.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Peste Negra</h3>
                            <p>Entre 1347 e 1351, a Europa é devastada pela Peste Negra, que mata cerca de um terço da população, impactando a economia e a sociedade da época.</p>
                        </div>
                        <div class="time">
                            <h4>Século XIV</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/peste.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Guerra dos Cem Anos</h3>
                            <p>Conflito prolongado entre França e Inglaterra por questões territoriais e de sucessão ao trono francês, que termina com a vitória da França e mudanças significativas no poder militar e político.</p>
                        </div>
                        <div class="time">
                            <h4>De 1337-1453</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/guerra 100.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Queda de Constantinopla</h3>
                            <p>O Império Bizantino é conquistado pelos turcos otomanos, marcando o fim da Idade Média para muitos historiadores e simbolizando a transição para o Renascimento e a Idade Moderna.</p>
                        </div>
                        <div class="time">
                            <h4>Ano de 1453</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/constantinopla.png" alt="">
                        </div>
                    </li>
                    <div style="clear:both;"></div>
                </ul>
            </div>
        </section>
        <section id="section-videos">
                <h2>Material de estudo</h2>
                <div class="videos">
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/Q4E3vPl-KkY" title="A Idade Média" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    
                    </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/CTIs_RSPr84" title="Resumo de História: IDADE MÉDIA (tudo que você precisa saber!) - Débora Aladim" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/QjoHiK_luxw" title="IDADE MÉDIA E FEUDALISMO - Resumo Desenhado" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/YbR1bxtGnMo" title="ALTA E BAIXA IDADE MÉDIA: clero, feudalismo e cruzadas | RESUMO DE HISTÓRIA PARA O ENEM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/TCVacLnerKg?list=PLHtXR-4stWDeHGL0ldriaSAQ_lmVUmYiK" title="As Cruzadas: A Luta pela Terra Santa - História Medieval - Foca na História" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="video-estudo">
                        <iframe width="100%" height="330" src="https://www.youtube.com/embed/N6YxYbdvkNg" title="IDADE MÉDIA | HISTÓRIA | QUER QUE DESENHE?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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