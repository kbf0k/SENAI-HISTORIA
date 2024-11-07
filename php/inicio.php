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
    <link rel="stylesheet" href="../css/inicio.css">
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

    <main>
        <?php ?>
        <section class="intro">
            <video autoplay muted loop class="background-video">
                <source src="../video/teste.mp4" type="video/mp4">
            </video>
            
            <div class="container">
                <h2 class="animated animated-title">Bem-vindo ao História em Foco!</h2>
                <p class="animated animated-subtitle">Explore os períodos mais importantes da história e descubra como esses momentos influenciaram o
                    desenvolvimento da sociedade em que vivemos. Cada etapa da história oferece uma visão única sobre os
                    acontecimentos e transformações que moldaram o mundo ao longo dos séculos. Aproveite os recursos
                    interativos, vídeos educativos e leituras complementares desse site para aprofundar seu conhecimento
                    sobre a história humana.</p>
                <a href="#periodos" class="animated animated-btn btn">Comece sua jornada histórica</a>
            </div>
        </section>

        <section id="periodos" class="periodos">
            <div class="container">
                <h2>Períodos Históricos</h2>
                <div class="cards">
                    <div class="periodo-card animated animated-cards">
                        <a href="pre_historia.php">
                            <h3>Pré História</h3>
                            <p>Conheça os primeiros passos da humanidade, desde os hominídeos até o desenvolvimento da
                                agricultura.</p>
                        </a>
                    </div>
                    <div class="periodo-card animated animated-cards">
                        <a href="idade_antiga.php">
                            <h3>Idade Antiga</h3>
                            <p>Explore as civilizações antigas, como a Mesopotâmia, Egito e Grécia, e seus legados.</p>
                        </a>
                    </div>
                    <div class="periodo-card animated animated-cards">
                        <a href="idade_media.php">
                            <h3>Idade Média</h3>
                            <p>Descubra a era medieval, marcada pelo feudalismo e pela influência da Igreja.</p>
                        </a>
                    </div>
                    <div class="periodo-card animated animated-cards">
                        <a href="idade_moderna.php">
                            <h3>Idade Moderna</h3>
                            <p>Analise os avanços nas ciências, a Revolução Industrial e as grandes descobertas.</p>
                        </a>
                    </div>
                    <div class="periodo-card animated animated-cards">
                        <a href="idade_contemporanea.php">
                            <h3>Idade Contemporânea</h3>
                            <p>Entenda os desafios do mundo atual, incluindo guerras, globalização e tecnologia.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="linha-do-tempo">
                <div class="linha-horizontal"></div>
                <div class="eventos">

                    <div class="evento animated">
                        <div class="corda"></div>
                        <div class="circulo"></div>
                        <div class="descricao">
                            <span class="titulo">Pré-História</span>
                            <span class="data">2.500.000 a.C. - 4.000 a.C.</span>
                        </div>
                    </div>
                    <div class="evento animated">
                        <div class="corda"></div>
                        <div class="circulo"></div>
                        <div class="descricao">
                            <span class="titulo">Idade Antiga</span>
                            <span class="data">4.000 a.C. - 476 d.C.</span>
                        </div>
                    </div>
                    <div class="evento animated">
                        <div class="corda"></div>
                        <div class="circulo"></div>
                        <div class="descricao">
                            <span class="titulo">Idade Média</span>
                            <span class="data">476 d.C. - 1453</span>
                        </div>
                    </div>
                    <div class="evento animated">
                        <div class="corda"></div>
                        <div class="circulo"></div>
                        <div class="descricao">
                            <span class="titulo">Idade Moderna</span>
                            <span class="data">1453 - 1789</span>
                        </div>
                    </div>
                    <div class="evento animated">
                        <div class="corda"></div>
                        <div class="circulo"></div>
                        <div class="descricao">
                            <span class="titulo">Idade Contemporânea</span>
                            <span class="data">1789 - Atualidade</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        
        <section class="atividades">
            <div class="container">
                <h2>Atividades de Prática em História</h2>
                <p>Desenvolva suas habilidades em história com atividades interativas e desafiadoras!</p>
                <p>Explore opções para testar seu conhecimento e fixar conteúdos de forma divertida.</p>
                
                <div class="atividades-conteudo">
                    <div class="atividade questionarios animated">
                        <h3>Questionários</h3>
                        <p>Desafie-se com perguntas sobre temas históricos. Esses questionários abrangem desde a Pré-História até a Idade Contemporânea.</p>
                    </div>
                    <div class="atividade atividades-dinamicas animated">
                        <h3>Atividades Dinâmicas</h3>
                        <p>Divirta-se com atividades como caça-palavras e cruzadinhas temáticas, projetadas para reforçar o aprendizado histórico de forma interativa.</p>
                    </div>
                    <div class="atividade jogo-da-memoria animated">
                        <h3>Jogo da Memória</h3>
                        <p>Teste sua memória e associe personagens, eventos e datas importantes com nosso jogo da memória histórico!</p>
                    </div>
                </div>
                
                <a href="../php/atividades.php" class="btn">Ver Atividades</a>
            </div>
        </section>
        
        <section class="glossario animated">
            <div class="container">
                <h2>Glossário Histórico</h2>
                <p>Entenda os principais conceitos e termos históricos com nosso glossário interativo.</p>
                <p>Cada definição contém uma explicação breve de fácil entendimento. Aprofunde-se no conhecimento e
                    explore cada termo.</p>
                <a href="../php/glossario.php" class="btn">Acessar Glossário</a>
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