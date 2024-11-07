<?php
include_once('conexao.php');
session_start();

if (!isset($_SESSION['nome_sessao'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/enem.css">
    <script src="../javascript/atividades.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <title>ENEM e Vestibulares</title>
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
                    <li><a href="atividades.php">ENEM</a></li>


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
    <section class="articles">
            <div id="pagetitle">
                <h1>ENEM e Vestibulares</h1>
                <h3>Prepare-se para os principais vestibulares e o ENEM com conteúdos completos e atualizados sobre a História!</h3>
            </div>
            <div class="article-container">
                <article>
                    <div class="article-wrapper">
                        <figure>
                            <img src="../img/materiais_enem.jpg" alt="Título da Atividade 1" />
                        </figure>
                        <div class="article-body">
                            <h2>Principais Conteúdos</h2>
                            <p>Descubra os principais temas de história que caem no ENEM. Nesta seção, focamos nos assuntos essenciais para o exame, com uma visão detalhada dos conteúdos mais recorrentes e dicas de estudo para cada um, para que você consiga arrasar na prova.
                            </p>
                            <a href="#pre-historia" class="read-more"><span class="sr-only">Ver Mais</span></a>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="article-wrapper">
                        <figure>
                            <img src="../img/materias_de_estudo.jpg" alt="Título da Atividade 2" />
                        </figure>
                        <div class="article-body">
                            <h2>Materiais de Estudo</h2>
                            <p>Explore nossa seleção de materiais de estudo para o ENEM em história, incluindo vídeos, sites, e recursos interativos. Aqui você encontra ferramentas práticas para reforçar o aprendizado e tornar a preparação mais dinâmica.</p>
                            <a href="#idade-antiga" class="read-more"><span class="sr-only">Ver Mais</span></a>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="article-wrapper">
                        <figure>
                            <img src="../img/questoes_enem.webp" alt="Título da Atividade 3" />
                        </figure>
                        <div class="article-body">
                            <h2>Questões de Prova</h2>
                            <p>Teste seu conhecimento com questões de história do ENEM! Essa seção reúne perguntas de provas passadas, organizadas por tema, para você praticar e se familiarizar com o estilo das questões e o nível de exigência do exame.</p>
                            <a href="#idade-media" class="read-more"><span class="sr-only">Ver Mais</span></a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
         <section class="conteudos-vestibulares">
  <h2>Como Estudar para Vestibulares de História</h2>
  <p>Para garantir uma boa preparação, concentre-se nos tópicos mais recorrentes nas provas de vestibulares e ENEM. Confira abaixo os principais períodos que você deve estudar com profundidade.</p>

  <div class="periodos">
    <h3>O que estudar para o ENEM?</h3>
    <p>Tradicionalmente, as perguntas de História do Exame Nacional do Ensino Médio (Enem) apresentam maior foco em História do Brasil.
    Apesar do Brasil ser o tema mais cobrado, não esqueça de revisar temas centrais da História Geral, como Revolução Francesa, Revolução Industrial, ideologias como o fascismo e o comunismo, pois também costumam cair no Enem.
    </p>
  </div>

  <div class="temas">
    <h3>Temas Transversais Importantes</h3>
    <ul>
      <li><strong>História do Brasil:</strong> Desde o período colonial, passando pelo Império, até o período republicano e contemporâneo, incluindo os principais movimentos sociais e políticos.</li>
      <li><strong>Movimentos Sociais e Revoluções:</strong> Revoluções que marcaram o mundo, como a Revolução Russa, a Revolução Chinesa e os movimentos de independência na América Latina.</li>
      <li><strong>História Cultural e Econômica:</strong> Entenda as mudanças culturais e econômicas em cada período, como o mercantilismo, capitalismo e socialismo.</li>
      <li><strong>Geopolítica Contemporânea:</strong> Guerra Fria, descolonização da África e Ásia, conflitos atuais e o papel de organizações internacionais.</li>
    </ul>
  </div>

  <div class="dicas-estudo">
    <h3>Dicas de Foco nos Estudos</h3>
    <p>Para cada tema, concentre-se em:</p>
    <ul>
      <li><strong>Fatos Relevantes:</strong> Identifique e memorize os acontecimentos mais significativos e suas causas e consequências.</li>
      <li><strong>Personagens Importantes:</strong> Conheça as figuras históricas que marcaram cada período e seus impactos.</li>
      <li><strong>Interpretação de Contexto:</strong> Entenda como os eventos se conectam e influenciam uns aos outros ao longo da história.</li>
    </ul>
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
