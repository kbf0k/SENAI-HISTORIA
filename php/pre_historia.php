<?php
include_once('conexao.php');
session_start();

if(!isset($_SESSION['nome_sessao'])){
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
    <link rel="stylesheet" href="../css/pre_historia.css">
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
    <div id="mobile-header" >
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
                <li><a href="idade_contemporanea.php">Idade Contemporânea</a></li></li>
                <li><a href="glossario.php">Glossário</a></li>
                <li><a href="atividades.php">Atividades Complementares</a></li>
            </ul>
        </nav>
    </div>
    </header>

    <main>
    <section id="introducao">
            <div class="video">
                <video src="../video/pre_historia.mp4" autoplay loop muted></video>
            </div>
            <div class="titulo">
                <h1>PRÉ-HISTÓRIA</h1>
                <p>A pré-história é o período da história humana que precede o surgimento da Escrita</p>
                <a href="#acontecimentos"><button id="saiba-mais">Saiba Mais</button></a>
            </div>
        </section>
    <section id="acontecimentos" class="acontecimentos">
                <div class="container">
                    <h2>Fatos Marcantes da Pré História</h2>
                    <div class="itens-grid">
                        <a>
                            <div class="item">
                            <img src="../img/pintura-rupestre.webp" alt="Pintura Rupestre" >                                
                            <h3>Arte Rupestre</h3>
                                <p>Pinturas e gravuras encontradas em cavernas e abrigos rochosos em todo o mundo fornecem informações sobre as crenças, rituais e modos de vida dos povos pré-históricos.</p>
                            </div>
                        </a>
                        <a>
                            <div class="item">
                            <img src="../img/evolucaohumana.webp" alt="evolucaohumana" >
                                <h3>Evolução Humana</h3>
                                <p>A transição do Australopithecus para o Homo Sapiens trouxe grandes mudanças no comportamento humano, como a melhora do racíocinio,a linguagem e a fabricação de ferramentas.</p>
                            </div>
                        </a>
                        <a>
                            <div class="item">
                            <img src="../img/ferramentas.jpg" alt="ferramentas" >                                <h3>Desenvolvimento de Ferramentas</h3>
                                <p>Desde os primeiros instrumentos de pedra lascada no Paleolítico até as ferramentas polidas do Neolítico, a evolução tecnológica foi crucial para a sobrevivência e o progresso dos seres humanos.</p>
                            </div>
                        </a>
                        <a href="#guerra-fria">
                            <div class="item">
                            <img src="../img/aldeias.jpg" alt="aldeias" >                                
                            <h3>Primeiras Aldeias</h3>
                                <p>Início da vida comunitária e da organização social mais complexa. A sedentarização levou ao desenvolvimento de estruturas sociais hierárquicas, ao trabalho e à construção de moradias permanentes.</p>
                            </div>

                        </a>
                    </div>
                </div>
            </section>
            <div id="eventos">
                <section id="rev-francesa" class="evento revolucao-francesa">
                    <div class="evento-conteudo">
                        <div class="evento-text">
                            <h3>Paleolítico</h3>
                            <p>O período Paleolítico, também conhecido como Idade da Pedra Lascada, se estende de aproximadamente 2,5 milhões de anos atrás até cerca de 10.000 a.C. Esse longo período marcou o desenvolvimento das primeiras ferramentas de pedra e o surgimento do fogo, que foram essenciais para a sobrevivência dos primeiros seres humanos. O Paleolítico se caracteriza pelo modo de vida baseado na caça, pesca e coleta de alimentos.</p>

<p>As principais características do Paleolítico incluem:</p>

<p><strong>Ferramentas Simples:</strong> Os primeiros hominídeos usavam pedras lascadas para fabricar instrumentos de caça e defesa, evoluindo lentamente suas habilidades manuais.</p>
<p><strong>Domínio do Fogo:</strong> A capacidade de controlar o fogo foi um marco que trouxe aquecimento, proteção contra animais e a possibilidade de cozinhar alimentos, melhorando a dieta e a saúde.</p>
<p><strong>Vida em Pequenos Grupos:</strong> As pessoas viviam em pequenos grupos nômades, deslocando-se em busca de alimentos e abrigos, o que ajudou no desenvolvimento das primeiras organizações sociais.</p>
<p>Esse período da pré-história também é marcado pelo surgimento de expressões artísticas, como pinturas rupestres e esculturas primitivas, que refletem os pensamentos e crenças dos povos da época.</p>

                        </div>
                        <img src="../img/paleolitico.webp" alt="aldeias" >
                        </div>
                </section>
                
                <section id="rev-industrial" class="evento revolucao-industrial">
                    <div class="evento-conteudo">
                    <img src="../img/mesolitico.webp" alt="aldeias">
                    <div class="evento-text">
                            <h3>Mesolítico</h3>
                            <p>O período Mesolítico, ou Idade da Pedra Média, ocorreu aproximadamente entre 10.000 a.C. e 8.000 a.C., após o Paleolítico e antes do Neolítico. Esse período marcou uma transição importante entre o modo de vida nômade dos caçadores-coletores e o início da sedentarização. Com o fim da última Era Glacial, novas técnicas de caça e pesca surgiram, adaptando-se às mudanças climáticas e ecológicas.</p>
<p>As principais características do Mesolítico incluem:</p>
<p><strong>Ferramentas Mais Complexas:</strong> Houve uma evolução nas ferramentas, com a produção de micrólitos — pequenas lâminas de pedra — que eram usadas para confeccionar utensílios mais precisos e leves, como arpões e anzóis.</p>
<p><strong>Domesticação Inicial:</strong> Embora ainda fossem nômades, os grupos começaram a domesticar alguns animais menores e desenvolver técnicas rudimentares de plantio, preparando o caminho para a agricultura no Neolítico.</p>
<p><strong>Estabelecimento de Aldeias Temporárias:</strong> O clima mais ameno permitiu a formação de aldeias temporárias próximas a rios e lagos, onde a pesca e a coleta de alimentos foram otimizadas.</p>
<p>Essas inovações tecnológicas e sociais do Mesolítico estabeleceram as bases para as sociedades agrícolas e sedentárias do período Neolítico, promovendo a adaptação humana a um ambiente em transformação.</p>
                        </div>
                    </div>
                </section>
                
                <section id="guerras" class="evento grandes-guerras">
                    <div class="evento-conteudo">
                        <div class="evento-text">
                            <h3>Neolílítico</h3>
                            <p>O período Neolítico, ou Idade da Pedra Polida, ocorreu entre aproximadamente 8.000 a.C. e 3.000 a.C. Esse período marcou grandes transformações na vida humana, como a adoção da agricultura, a domesticação de animais e o surgimento das primeiras aldeias permanentes. A utilização da pedra polida para fabricar ferramentas mais duráveis foi uma inovação que contribuiu para o desenvolvimento dessas atividades.</p>

<p>As principais características do Neolítico incluem:</p>
<p><strong>Revolução Agrícola:</strong> O cultivo de plantas como trigo e cevada permitiu que os grupos humanos produzissem seu próprio alimento, garantindo maior segurança alimentar e independência da caça.</p>
<p><strong>Domesticação de Animais:</strong> Animais como ovelhas, cabras e gado foram domesticados, proporcionando leite, carne e couro, além de auxiliarem no trabalho agrícola.</p>
<p><strong>Ferramentas de Pedra Polida:</strong> A técnica de polir pedras tornou as ferramentas mais eficientes e duráveis, facilitando tarefas agrícolas, como o corte de árvores e a preparação do solo para o plantio.</p>
<p><strong>Vilas Permanentes:</strong> Com a agricultura, surgiram as primeiras aldeias estáveis, como Çatalhöyük, na Turquia, onde as pessoas começaram a construir moradias e organizar comunidades complexas.</p>
<p>O período Neolítico trouxe avanços tecnológicos, sociais e culturais que permitiram o surgimento das primeiras civilizações, estabelecendo as bases para a vida urbana e a organização das sociedades.</p>
                        </div>
                        <img src="../img/neleoloiticos.jpg" alt="aldeias" >                        
                    </div>
                </section>
                
              
            </div>
        
      


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
</html>
