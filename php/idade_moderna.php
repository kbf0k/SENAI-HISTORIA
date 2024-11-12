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
                <video id="meuVideo" src="../video/idade_moderna.mp4" autoplay loop muted></video>
            </div>
            <div class="titulo">
                <h1>IDADE MODERNA</h1>
                <p>A Idade Moderna é marcada por grandes mudanças sociais, políticas e culturais.</p>
                <a href="#caracteristicas"><button id="saiba-mais">Saiba Mais</button></a>
            </div>
        </section>

        <section id="caracteristicas">
            <h1 id="titulo-caracteristicas">PRINCIPAIS CARACTERÍSTICAS</h1>
            <div class="carrossel-container">
                <div class="carrossel">
                    <div class="item">
                        <img src="../img/renascimento.jfif" alt="">
                        <div class="conteudo">
                            <h1>Renascimento</h1>
                            <p>Movimento cultural e artístico que ressurgiu na Europa, caracterizado pelo retorno aos valores clássicos da Antiguidade e pela valorização do conhecimento, da ciência e da arte.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../img/reformapt.jfif" alt="">
                        <div class="conteudo">
                            <h1>Reformas Religiosas</h1>
                            <p>Movimentos como a Reforma Protestante desafiaram a autoridade da Igreja Católica e levaram a mudanças significativas nas práticas e crenças religiosas da Europa.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../img/feudalismo.png" alt="">
                        <div class="conteudo">
                            <h1>Grandes Navegações</h1>
                            <p>Expansão marítima que levou à descoberta de novas rotas comerciais e territórios, impulsionando o intercâmbio cultural e econômico entre os continentes.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../img/iluminismo.png" alt="">
                        <div class="conteudo">
                            <h1>Iluminismo</h1>
                            <p>Movimento intelectual que promovia a razão e o pensamento crítico, questionando as instituições e os valores tradicionais e pavimentando o caminho para a modernidade.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#linhaTempo"><button id="saiba-mais">Saiba Mais</button></a>
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
                            <h3>Descobrimento da América</h3>
                            <p>Expedição de Cristóvão Colombo resulta na chegada à América, expandindo os horizontes europeus e marcando o início da colonização do Novo Mundo.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1492</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/descobrimento.webp" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Reforma Protestante</h3>
                            <p>Martinho Lutero inicia a Reforma Protestante, causando um cisma na Igreja Católica e dando origem ao Protestantismo.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1517</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/reformapt.jfif" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Revolução Científica</h3>
                            <p>Desenvolvimento de novas ideias e descobertas na física, astronomia, biologia e química, marcando uma revolução no pensamento científico.</p>
                        </div>
                        <div class="time">
                            <h4>Séculos XVI e XVII</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/revolucao_cientifica.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Declaração da Independência dos Estados Unidos</h3>
                            <p>Treze colônias declaram independência da Inglaterra, formando uma nova nação com base nos ideais de liberdade e igualdade.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1776</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/independencia_eua.jpg" alt="">
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
                        <div class="img-direita">
                            <img src="../img/revolucao_francesa.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Independência do Brasil</h3>
                            <p>Dom Pedro I declara a independência do Brasil de Portugal, marcando o início de uma nova nação na América do Sul.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1822</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/independencia_brasil.jfif" alt="Imagem da Independência do Brasil">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Primeira Guerra Mundial</h3>
                            <p>Conflito global que envolveu muitas das principais potências mundiais, resultando em grandes perdas e mudanças geopolíticas significativas.</p>
                        </div>
                        <div class="time">
                            <h4>1914 - 1918</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/primeira_guerra.jfif" alt="Imagem da Primeira Guerra Mundial">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Segunda Guerra Mundial</h3>
                            <p>Conflito global devastador que envolveu os Aliados e o Eixo, resultando na redefinição das fronteiras e em profundas transformações na política internacional.</p>
                        </div>
                        <div class="time">
                            <h4>1939 - 1945</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/segunda_guerra.jfif" alt="Imagem da Segunda Guerra Mundial">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Chegada do Homem à Lua</h3>
                            <p>A missão Apollo 11 da NASA leva os primeiros humanos à Lua, marcando um marco histórico na exploração espacial.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1969</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/homem_lua.jfif" alt="Imagem da chegada do homem à Lua">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Queda do Muro de Berlim</h3>
                            <p>A queda do Muro de Berlim simboliza o fim da Guerra Fria e a reunificação da Alemanha, abrindo caminho para uma nova era de cooperação global.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1989</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/queda_muro.jfif" alt="Imagem da queda do Muro de Berlim">
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <button id="backToTop" onclick="scrollToTop()">&#8250;</button>
    </main>
    <<footer class="footer">
        <a id="titulo" href="desenvolvedores.php" target="_blank">Equipe Desenvolvedora SOFTDEV</a>
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