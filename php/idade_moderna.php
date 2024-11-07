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
    <link rel="stylesheet" href="../css/idade_media.css">
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
                <a href="inicio.php"><img src="../img/LOGO-HISTORIA-INICIO-SEM-FUNDO.png" alt="Logo"></a>
                <h1>Idade Média</h1>
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
                                <?= $_SESSION['tipo_sessao'] ?>
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
        <section id="introducao">
            <div class="video">
                <video src="../video/videobackgroundIdadeMedia.mp4" autoplay loop muted></video>
            </div>
            <div class="titulo">
                <h1>IDADE MODERNA</h1>
                <p>Maiores segredos e feitos dessa época</p>
                <a href="#caracteristicas"><button id="saiba-mais">Saiba Mais</button></a>
            </div>
        </section>

                <section id="caracteristicas">
            <h1 id="titulo-caracteristicas">PRINCIPAIS CARACTERÍSTICAS</h1>
            <div class="lista-caracteristicas">
                <div class="item-caracteristica">
                    <div class="detalhes">
                        <h1>Descobrimentos Marítimos</h1>
                        <p>Durante os séculos XV e XVI, Portugal e Espanha lideraram grandes expedições marítimas, explorando novos continentes e rotas comerciais. Esse período foi marcado pela colonização de terras recém-descobertas e pelo intercâmbio de culturas e produtos entre Europa, África, Américas e Ásia. As grandes navegações expandiram o conhecimento geográfico e iniciaram uma era de globalização comercial.</p>
                    </div>

                </div>

                <div class="item-caracteristica">
                    <div class="detalhes">
                        <h1>Absolutismo</h1>
                        <p>O Absolutismo foi o sistema político e administrativo dos países europeus nos séculos XVI ao XVIII. Nele, o soberano centralizava todos os poderes do Estado em suas mãos, sem prestar contas à sociedade. A fim de controlar as revoltas camponesas, parte da nobreza apoia que o rei seja mais poderoso. Igualmente, o monarca recebe auxílio da burguesia, pois a centralização significava a padronização das políticas fiscais e monetárias.</p>
                    </div>
                </div>

                <div class="item-caracteristica">
                    <div class="detalhes">
                        <h1>Iniquisição</h1>
                        <p>A Inquisição foi uma instituição criada pela Igreja Católica na Idade Média com o objetivo de combater heresias e preservar a ortodoxia da fé cristã. Ela foi estabelecida oficialmente em 1231 pelo Papa Gregório IX, mas suas origens datam do século XII, quando começaram a surgir movimentos considerados heréticos pela Igreja, como os cátaros e os valdenses. A Inquisição se tornou famosa pelo uso de julgamentos, interrogatórios e punições para identificar e punir os chamados "hereges" — pessoas que defendiam ideias contrárias às doutrinas oficiais da Igreja.</p>
                    </div>
                </div>
            </div>
            <a href="#linhaTempo"><button id="saiba-mais">Saiba Mais</button></a>
        </section>

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
                            <p>Em 1492, Cristóvão Colombo chega ao continente americano, marcando o início da colonização das Américas e uma nova era de contato entre diferentes partes do mundo.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1492</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/descobrimento.webp" alt="Descobrimento da América">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Reforma Protestante</h3>
                            <p>Em 1517, Martinho Lutero desafia a Igreja Católica, iniciando a Reforma Protestante e provocando mudanças religiosas e políticas significativas na Europa.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1517</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/reformapt.jfif" alt="Reforma Protestante">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Renascimento Cultural</h3>
                            <p>Movimento cultural que resgata valores da Antiguidade Clássica e promove avanços nas artes, ciências e filosofia entre os séculos XIV e XVI.</p>
                        </div>
                        <div class="time">
                            <h4>Séculos XIV - XVI</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/renascimento.jfif" alt="Renascimento Cultural">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Expansão Marítima e Grandes Navegações</h3>
                            <p>Portugal e Espanha exploram novas rotas marítimas, impulsionando o comércio, a colonização e o intercâmbio cultural.</p>
                        </div>
                        <div class="time">
                            <h4>Séculos XV - XVI</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/expansao_maritima.jfif" alt="Expansão Marítima">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Revolução Científica</h3>
                            <p>A partir do século XVII, o método científico se consolida, com pensadores como Galileu, Kepler e Newton realizando descobertas fundamentais.</p>
                        </div>
                        <div class="time">
                            <h4>Século XVII</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/revolucao_cientifica.jpg" alt="Revolução Científica">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Formação dos Estados Nacionais</h3>
                            <p>A centralização de poder nas monarquias fortalece o surgimento dos Estados Nacionais modernos na Europa.</p>
                        </div>
                        <div class="time">
                            <h4>Séculos XV - XVI</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/estados_nacionais.jfif" alt="Formação dos Estados Nacionais">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Iluminismo</h3>
                            <p>Movimento intelectual que valoriza a razão, os direitos individuais e as ideias de liberdade, influenciando revoluções futuras.</p>
                        </div>
                        <div class="time">
                            <h4>Século XVIII</h4>
                        </div>
                        <div class="img-direita">
                            <img src="../img/iluminismo.jfif" alt="Iluminismo">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Revolução Francesa</h3>
                            <p>A Revolução Francesa marca o fim da Idade Moderna, iniciando um novo período com transformações políticas e sociais profundas.</p>
                        </div>
                        <div class="time">
                            <h4>Ano 1789</h4>
                        </div>
                        <div class="img-esquerda">
                            <img src="../img/revolucao_francesa.jpg" alt="Revolução Francesa">
                        </div>
                    </li>
                </ul>
            </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section contact-info">
                <h3>Contato</h3>
                <p><strong>SESI Caçapava:</strong> (12) 1234-5678</p>
                <img src="../img/logo-sesi.png" class="logo-footer" alt="">
                <p><strong>SENAI Taubaté:</strong> (12) 8765-4321</p>
                <img src="../img/logo-senai.png" class="logo-footer" alt="">
            </div>
            <div class="footer-section team">
                <h3>Equipe Desenvolvedora</h3>
                <h3>SOFTDEV</h3>
                <ul>
                    <li><a href="">Kaique Bernardes Ferreira</a></li>
                    <li><a href="">João Gustavo Mota Ramos</a></li>
                    <li><a href="">João Pedro da Cunha Machado</a></li>
                    <li><a href="">Murilo Henrique Souza Silva</a></li>
                    <li><a href="">Yago Roberto Gomes Moraes</a></li>
                </ul>
            </div>
            <div class="footer-section links">
                <h3>Links Úteis</h3>
                <ul>
                    <li><a href="termos_de_uso.php">Termos de Uso</a></li>
                    <li><a href="politica_privacidade.php">Política de Privacidade</a></li>
                    <li><a href="ajuda.php">Ajuda</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 História em Foco. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>