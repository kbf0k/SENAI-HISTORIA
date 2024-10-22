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
    <script src="../javascript/pre_historia.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>


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
                            <a href="">Pré-História</a>
                            <a href="idade_antiga.php">Idade Antiga</a>
                            <a href="idade_media.php">Idade Média</a>
                            <a href="idade_moderna.php">Idade Moderna</a>
                            <a href="idade_contemporanea.php">Idade Contemporânea</a>
                        </div>
                    </li>
                    <li><a href="../html/glossario.html">Glossário</a></li>
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
        <h1>Pré-História</h1>
        <p>A Pré-História é um período que acompanha o surgimento e o desenvolvimento da humanidade antes que fosse criada a primeira forma de escrita, no quarto milênio a.C.</p>
        
        <div>
            <img src="../img/cacadores-pre-historicos.webp" alt="Mamute na Pré-História">
            <p>A Pré-História é dividida entre os períodos Paleolítico, Mesolítico e Neolítico.</p>
        </div>

        <p id="text-all">A Pré-História é como conhecemos o período que acompanha a evolução humana a partir do momento que os hominídeos começaram a usar ferramentas de pedra. Encerrou-se com o surgimento da escrita, que aconteceu entre 3.500 a.C. e 3.000 a.C. A Pré-História é, basicamente, dividida entre Paleolítico, Mesolítico (período intermediário) e Neolítico. Nesses períodos, acompanhamos o desenvolvimento dos hominídeos com a elaboração de novas ferramentas, além do surgimento do Homo sapiens sapiens, há cerca de 300 mil anos.</p>

        <h2>Períodos da Pré-História</h2>
        <div class="container">
            <ul class="dropdown-list">
                <li>
                    <button class="dropdown-btn">Paleolítico</button>
                    <div class="dropdown-content">
                        <h2>O Período Paleolítico</h2>
                        <p>O Paleolítico, também conhecido como Idade da Pedra Lascada, é o período mais longo da Pré-História, começando há cerca de 2,5 milhões de anos e terminando por volta de 10.000 a.C.</p>
                        
                        <h3>Principais Características:</h3>
                        <h4>Ferramentas:</h4>
                        <p>As primeiras ferramentas humanas eram feitas de pedra lascada, usadas principalmente para caça e corte.</p>

                        <h4>Economia de Subsistência:</h4>
                        <p>A sobrevivência dependia da caça, pesca e coleta de frutos silvestres. Os humanos eram nômades, movendo-se conforme a disponibilidade de recursos.</p>

                        <h4>Organização Social:</h4>
                        <p>As pessoas viviam em pequenos grupos familiares ou tribos. Não havia propriedade privada, e a partilha de recursos era comum.</p>

                        <h4>Fogo:</h4>
                        <p>Uma das maiores descobertas desse período foi o controle do fogo, o que trouxe grandes avanços na segurança, culinária e aquecimento.</p>
                        <img src="../img/paleolitico.webp" alt="">
                        <h3>Cultura e Arte:</h3>
                        <h4>Arte Rupestre:</h4>
                        <p>As primeiras manifestações artísticas surgiram durante o Paleolítico, com pinturas em cavernas retratando animais e cenas de caça.</p>

                        <h4>Religião e Rituais:</h4>
                        <p>Existem indícios de rituais funerários, sugerindo que os humanos paleolíticos tinham crenças espirituais relacionadas à vida e à morte.</p>
                        
                        <h3>Curiosidade:</h3>
                        <h4>Domínio do Fogo:</h4>
                        <p>Além de proteger contra predadores, o uso do fogo ajudou no desenvolvimento da linguagem, pois as pessoas se reuniam ao redor da fogueira para interagir e se comunicar.</p>
                        
                    </div>
                </li>
                
                <li>
                    <button class="dropdown-btn">Mesolítico</button>
                    <div class="dropdown-content">
                        <h2>O Período Mesolítico</h2>
                        <p>O Mesolítico, ou Idade da Pedra Média, foi o período de transição entre o Paleolítico e o Neolítico, ocorrendo aproximadamente entre 10.000 a.C. e 6.000 a.C., dependendo da região.</p>
                        
                        <h3>Principais Características:</h3>
                        <h4>Mudanças Climáticas:</h4>
                        <p>O fim da última Era Glacial provocou alterações no ambiente, influenciando a fauna e a flora, e demandando adaptações nos modos de vida humanos.</p>
                        <img src="../img/mesolitico.webp" alt="">
                        <h4>Ferramentas:</h4>
                        <p>Ferramentas de pedra se tornaram mais refinadas, com a invenção do arco e flecha, além de anzóis de osso para a pesca.</p>

                        <h4>Modo de Vida:</h4>
                        <p>Embora ainda fossem caçadores-coletores, os humanos começaram a desenvolver assentamentos temporários, aproveitando a abundância de recursos naturais.</p>

                        <h3>Transição para o Sedentarismo:</h3>
                        <p>Este período marca o início de uma transição lenta para o sedentarismo, com o aumento da dependência da coleta e da domesticação de animais.</p>
                    </div>
                </li>

                <li>
                    <button class="dropdown-btn">Neolítico</button>
                    <div class="dropdown-content">
                        <h2>O Período Neolítico</h2>
                        <p>O Neolítico, ou Idade da Pedra Polida, é o período que marca uma mudança radical na história da humanidade, ocorrendo entre 6.000 a.C. e 3.000 a.C., aproximadamente, dependendo da região.</p>
                        
                        <h3>Principais Características:</h3>
                        <h4>Ferramentas de Pedra Polida:</h4>
                        <p>Durante o Neolítico, as ferramentas de pedra se tornaram mais sofisticadas, com superfícies mais lisas e afiadas, sendo utilizadas em atividades agrícolas e de construção.</p>
                
                        <h4>Revolução Agrícola:</h4>
                        <p>Uma das maiores mudanças desse período foi o desenvolvimento da agricultura e a domesticação de animais. Isso permitiu que os humanos abandonassem o nomadismo e se estabelecessem em comunidades sedentárias.</p>
                        
                        <h4>Sociedade:</h4>
                        <p>Com a fixação em locais permanentes, as aldeias começaram a surgir, formando as primeiras comunidades organizadas. A divisão de trabalho se tornou mais complexa, e o conceito de propriedade privada emergiu.</p>
                        <img src="../img/neleoloiticos.jpg" alt="">
                        <h3>Avanços Tecnológicos e Culturais:</h3>
                        <h4>Cerâmica:</h4>
                        <p>Durante o Neolítico, a fabricação de cerâmica se desenvolveu, permitindo o armazenamento de alimentos e água de forma mais eficiente.</p>
                        
                        <h4>Arquitetura:</h4>
                        <p>Os humanos neolíticos começaram a construir casas permanentes de madeira, barro e pedra, além de estruturas comunitárias, como celeiros e muralhas de proteção.</p>
                        
                        <h4>Religião e Cultura:</h4>
                        <p>Surgiram práticas religiosas e rituais mais elaborados, com o desenvolvimento de monumentos como dólmens e menires, indicando uma conexão espiritual com a terra e a natureza.</p>
                        
                        <h3>Curiosidade:</h3>
                        <h4>Stonehenge:</h4>
                        <p>O monumento de Stonehenge, na Inglaterra, é um exemplo icônico de construção do período Neolítico, utilizado possivelmente para rituais religiosos e astronômicos.</p>
                    </div>
                </li>                
            </ul>
        </div>

        <h2>Ferramentas de Pedra</h2>
        <div id="lista">
            <ul>
                <li>Pedra forte: Utilizada para quebrar materiais, com técnicas de mineração rudimentares.</li>
                <li>Pedra rica em minerais: Pedra contendo grande volume de minerais, usada em diferentes ferramentas.</li>
                <li>Pedra sólida: Pedra resistente usada para cortar e perfurar.</li>
                <li>Pedra de cimento: Pedra firme e durável, utilizada em construções primitivas.</li>
            </ul>
        </div>
        
        <h2>Fonte de Informações</h2>
        <p>Fonte: <a href="https://www.britannica.com/event/Ancient-Egypt">Britannica</a></p>
        <p>Agradecimentos a: <a href="https://www.britannica.com/biography/Alexander-the-Great">Alexander the Great</a></p>
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