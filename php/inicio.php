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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="../javascript/inicio.js" defer></script>
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
                            <a href="">Idade Antiga</a>
                            <a href="">Idade Média</a>
                            <a href="">Idade Moderna</a>
                            <a href="../html/idade_contemporanea.html">Idade Contemporânea</a>
                        </div>
                    </li>
                    <li><a href="../html/glossario.html">Glossário</a></li>

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
            <div class="container">
                <h2>Bem-vindo à Plataforma de História</h2>
                <p>Explore os períodos mais importantes da história e descubra como esses momentos influenciaram o
                    desenvolvimento da sociedade em que vivemos. Cada etapa da história oferece uma visão única sobre os
                    acontecimentos e transformações que moldaram o mundo ao longo dos séculos. Aproveite os recursos
                    interativos, vídeos educativos e leituras complementares desse site para aprofundar seu conhecimento
                    sobre a história humana.</p>
                <a href="#periodos" class="btn">Comece sua jornada histórica</a>
            </div>
        </section>

        <section id="periodos" class="periodos">
            <div class="container">
                <h2>Períodos Históricos</h2>
                <div class="cards">
                    <div class="periodo-card pre-historia">
                        <a href="pre-historia.html">
                            <h3>Pré História</h3>
                            <p>Conheça os primeiros passos da humanidade, desde os hominídeos até o desenvolvimento da
                                agricultura.</p>
                        </a>
                    </div>
                    <div class="periodo-card idade-antiga">
                        <a href="idade-antiga.html">
                            <h3>Idade Antiga</h3>
                            <p>Explore as civilizações antigas, como a Mesopotâmia, Egito e Grécia, e seus legados.</p>
                        </a>
                    </div>
                    <div class="periodo-card idade-media">
                        <a href="idade_media.html">
                            <h3>Idade Média</h3>
                            <p>Descubra a era medieval, marcada pelo feudalismo e pela influência da Igreja.</p>
                        </a>
                    </div>
                    <div class="periodo-card idade-moderna">
                        <a href="idade_moderna.html">
                            <h3>Idade Moderna</h3>
                            <p>Analise os avanços nas ciências, a Revolução Industrial e as grandes descobertas.</p>
                        </a>
                    </div>
                    <div class="periodo-card idade-contemporanea">
                        <a href="idade_contemporanea.html">
                            <h3>Idade Contemporânea</h3>
                            <p>Entenda os desafios do mundo atual, incluindo guerras, globalização e tecnologia.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="linha-do-tempo">
                <div class="linha-horizontal"></div>
                <div class="evento">
                    <div class="corda"></div>
                    <div class="circulo"></div>
                    <div class="descricao">
                        <span class="titulo">Pré-História</span>
                        <span class="data">2.500.000 a.C. - 4.000 a.C.</span>
                    </div>
                </div>
                <div class="evento">
                    <div class="corda"></div>
                    <div class="circulo"></div>
                    <div class="descricao">
                        <span class="titulo">Idade Antiga</span>
                        <span class="data">4.000 a.C. - 476 d.C.</span>
                    </div>
                </div>
                <div class="evento">
                    <div class="corda"></div>
                    <div class="circulo"></div>
                    <div class="descricao">
                        <span class="titulo">Idade Média</span>
                        <span class="data">476 d.C. - 1453</span>
                    </div>
                </div>
                <div class="evento">
                    <div class="corda"></div>
                    <div class="circulo"></div>
                    <div class="descricao">
                        <span class="titulo">Idade Moderna</span>
                        <span class="data">1453 - 1789</span>
                    </div>
                </div>
                <div class="evento">
                    <div class="corda"></div>
                    <div class="circulo"></div>
                    <div class="descricao">
                        <span class="titulo">Idade Contemporânea</span>
                        <span class="data">1789 - Atualidade</span>
                    </div>
                </div>
            </div>

        </section>


        <section class="glossario">
            <div class="container">
                <h2>Glossário Histórico</h2>
                <p>Entenda melhor os principais conceitos e termos históricos com nosso glossário interativo.</p>
                <p>Cada definição contém uma explicação detalhada e imagens ilustrativas. Aprofunde-se no conhecimento e
                    explore cada termo.</p>
                <a href="../html/glossario.html" class="btn">Acessar Glossário</a>
            </div>
        </section>


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
    </main>
</body>

</html>