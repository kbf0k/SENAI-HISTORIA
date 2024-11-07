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
        <img id="img-central" src="../img/civilizacoes-da-idade-antiga.jpg" alt="Civilizações da Idade Antiga">
        <div class="conteudo">
            <h1 class="page-title">Idade Antiga</h1>
            <p>A Idade Antiga compreende o período que se inicia com o surgimento da escrita, por volta de 3.500 a.C., e vai até a queda do Império Romano do Ocidente, em 476 d.C.</p>
            
            <p>Na Idade Antiga, surgiram as primeiras cidades organizadas, impérios e estados centralizados, além das primeiras formas de governo, religião estruturada, escrita e avanços na ciência e nas artes.</p>
            <p>As principais civilizações desse período foram: Egito, Mesopotâmia, Persas, Grécia e Roma, cada uma delas com contribuições marcantes para a história humana.</p>
            
        </div>

        <h2 class="civilizations-title">Civilizações da Idade Antiga</h2>
        
        <div class="civilizations-container">
    <ul class="civilizations-list">
        <li>
            <button class="civilization-btn">Egito</button>
            <div class="civilization-content" style="display: none;">
                <h2 class="civilization-name">Civilização Egípcia</h2>
                <p>A civilização egípcia, situada ao longo do Nilo, teve uma sociedade hierarquizada sob o comando dos faraós. Desenvolveram as pirâmides como túmulos, a escrita hieroglífica, e uma religião politeísta com forte crença na vida após a morte.</p>
                <img src="../img/piramide.webp" alt="Pirâmides do Egito">
            </div>
        </li>

        <li>
            <button class="civilization-btn">Mesopotâmia</button>
            <div class="civilization-content" style="display: none;">
                <h2 class="civilization-name">Civilização Mesopotâmica</h2>
                <p>Entre os rios Tigre e Eufrates, surgiram civilizações como os sumérios e babilônios. Inovaram com a escrita cuneiforme, o Código de Hamurabi e zigurates, e tinham uma religião politeísta ligada à natureza.</p>
                <img src="../img/escrita-cuneiforme.jpg" alt="Escrita Cuneiforme da Mesopotâmia">
            </div>
        </li>

        <li>
            <button class="civilization-btn">Persa</button>
            <div class="civilization-content" style="display: none;">
                <h2 class="civilization-name">Civilização Persa</h2>
                <p>O Império Persa, fundado por Ciro, destacou-se por sua administração eficiente e o Zoroastrismo. Valorizavam a arte e arquitetura, como visto em Persépolis, e mantinham uma política de tolerância com culturas conquistadas.</p>
                <img src="../img/5milpersas.jpg" alt="Império Persa">
            </div>
        </li>

        <li>
            <button class="civilization-btn">Grécia</button>
            <div class="civilization-content" style="display: none;">
                <h2 class="civilization-name">Civilização Grega</h2>
                <p>A Grécia Antiga contribuiu com a democracia, filosofia, ciência, arte e mitologia. Atenas foi o berço da democracia, enquanto figuras como Sócrates e Aristóteles influenciaram a filosofia ocidental.</p>
                <img src="../img/templo-grego.jpeg" alt="Templo Grego">
            </div>
        </li>

        <li>
            <button class="civilization-btn">Roma</button>
            <div class="civilization-content" style="display: none;">
                <h2 class="civilization-name">Civilização Romana</h2>
                <p>O Império Romano se destacou pelo direito, conquistas militares e infraestrutura. Construíram uma vasta rede de estradas e aquedutos e, no final, adotaram o cristianismo como religião oficial.</p>
                <img src="../img/coliseu.jpg" alt="Coliseu Romano">
            </div>
        </li>
    </ul>
</div>
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