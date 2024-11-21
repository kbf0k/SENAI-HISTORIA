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
    <title>Idade Contemporânea</title>
    <link rel="stylesheet" href="../css/idade_contemporanea.css">
    <script src="../javascript/pre_historia.js" defer></script>
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
                <video id="meuVideo" src="../video/idade-contemporanea.mp4" autoplay loop muted></video>
            </div>
            <div class="titulo">
                <h1>IDADE CONTEMPORÂNEA</h1>
                <p>A Idade Contemporânea foi marcada por rápidas transformações tecnológicas, sociais e culturais </p>
                <a href="#acontecimentos"><button id="saiba-mais">Saiba Mais</button></a>
            </div>
        </section>
        </section>
        <section id="acontecimentos" class="acontecimentos">
            <div class="container">
                <h2>Fatos Marcantes da Idade Contemporânea</h2>
                <div class="itens-grid">
                    <a href="#rev-francesa">
                        <div class="item">
                            <img src="../img/revolucao-francesa.webp" alt="Revolução Francesa">
                            <h3>Revolução Francesa</h3>
                            <p>Marcou o começo da Idade Contemporânea, transformando as estruturas políticas e sociais.</p>
                        </div>
                    </a>
                    <a href="#rev-industrial">
                        <div class="item">
                            <img src="../img/revolucao-industrial.jpeg" alt="Revolução Industrial">
                            <h3>Revolução Industrial</h3>
                            <p>Período de transformação econômica e tecnológica, e o início da era moderna.</p>
                        </div>
                    </a>
                    <a href="#guerras">
                        <div class="item">
                            <img src="../img/primeira-guerra-mundial.webp" alt="Guerras Mundiais">
                            <h3>Guerras Mundiais</h3>
                            <p>Conflitos globais devastadores que transformaram fronteiras políticas, sociais e econômicas.</p>
                        </div>
                    </a>
                    <a href="#guerra-fria">
                        <div class="item">
                            <img src="../img/guerra-fria.webp" alt="Guerra Fria">
                            <h3>Guerra Fria</h3>
                            <p>Guerra ideológica entre capitalismo e socialismo que dividiu o mundo, caracterizado por conflitos indiretos.</p>
                        </div>

                    </a>
                </div>
            </div>
        </section>
        <div id="eventos">
            <section id="rev-francesa" class="evento revolucao-francesa">
                <div class="evento-conteudo">
                    <div class="evento-text">
                        <h3>Revolução Francesa</h3>
                        <p>A Revolução Francesa ocorreu entre 1789 e 1799, resultando na queda da monarquia absoluta e na ascensão da República. Este movimento popular surgiu devido a várias questões, incluindo a crise financeira, a influência das ideias iluministas e a insatisfação com a desigualdade social.</p>
                        <p>As principais causas da revolução incluem:</p>
                        <p><strong>Desigualdade Social:</strong> A sociedade estava dividida em três estados, onde o Terceiro Estado (camponeses e burguesia) arcava com a maior parte dos impostos, enquanto os nobres e o clero eram isentos.</li>
                        <p><strong>Ideias Iluministas:</strong> Filósofos como Rousseau e Voltaire inspiraram os cidadãos a questionarem a autoridade e lutarem por direitos e liberdade.</li>
                        <p><strong>Crise Financeira:</strong> O déficit orçamentário e o endividamento do Estado levaram à convocação dos Estados Gerais, onde as reivindicações do Terceiro Estado foram ignoradas, culminando na Assembleia Nacional.</li>
                        <p>O evento mais simbólico foi a Queda da Bastilha em 14 de julho de 1789, que representou a luta contra a opressão. A Revolução resultou na Declaração dos Direitos do Homem e do Cidadão, um marco na história dos direitos humanos.</p>
                    </div>
                    <img src="../img/revolucao-francesa-2.webp" alt="Revolução Francesa">
                </div>
            </section>

            <section id="rev-industrial" class="evento revolucao-industrial">
                <div class="evento-conteudo">
                    <img src="../img/revolucao-industrial-2.jfif" alt="Revolução Industrial">
                    <div class="evento-text">
                        <h3>Revolução Industrial</h3>
                        <p>A Revolução Industrial começou no século XVIII na Inglaterra e transformou a produção artesanal em produção mecanizada. Este período foi marcado pela introdução de novas tecnologias e a transição para uma economia baseada em fábricas, gerando grandes mudanças sociais e urbanização.</p>
                        <p>As inovações tecnológicas, como a máquina a vapor de James Watt e o uso de maquinaria nas fábricas, aumentaram a eficiência da produção e diminuíram os custos. Essa transformação teve vários impactos, incluindo:</p>
                        <p><strong>Crescimento Urbano:</strong> A migração em massa das áreas rurais para as cidades em busca de trabalho nas indústrias resultou em crescimento urbano acelerado e a formação de grandes centros urbanos.</p>
                        <p><strong>Condições de Trabalho:</strong> Embora a revolução tenha trazido progresso econômico, também gerou condições de trabalho precárias, com jornadas longas, baixos salários e exploração infantil.</p>
                        <p><strong>Movimentos Trabalhistas:</strong> Em resposta às péssimas condições, surgiram movimentos trabalhistas que lutaram por direitos, melhores salários e condições dignas de trabalho, resultando em reformas sociais e leis trabalhistas.</p>
                        <p>A Revolução Industrial não apenas mudou a economia, mas também a vida cotidiana das pessoas, influenciando a educação, a saúde e a política em todo o mundo.</p>
                    </div>
                </div>
            </section>

            <section id="guerras" class="evento grandes-guerras">
                <div class="evento-conteudo">
                    <div class="evento-text">
                        <h3>Grandes Guerras</h3>
                        <p>As Guerras Mundiais, ocorridas entre 1914-1918 (Primeira Guerra Mundial) e 1939-1945 (Segunda Guerra Mundial), foram conflitos globais que resultaram em milhões de mortes e reconfigurações geopolíticas. A Primeira Guerra Mundial foi desencadeada por rivalidades imperialistas e alianças, enquanto a Segunda Guerra Mundial foi causada pela expansão territorial do Eixo e pela resposta dos Aliados.</p>
                        <p>Durante a Primeira Guerra Mundial, a tensão entre potências europeias, especialmente a rivalidade entre a Alemanha e a França, e a assassinato do arquiduque Francisco Ferdinando foram os estopins do conflito. A guerra introduziu novas tecnologias militares, como tanques, aviões e armas químicas.</p>
                        <p>A Segunda Guerra Mundial, a mais devastadora da história, foi marcada pela ascensão do nazismo, a invasão da Polônia pela Alemanha e o ataque a Pearl Harbor pelos japoneses. O conflito terminou com a rendição incondicional do Eixo e levou à criação da Organização das Nações Unidas (ONU).</p>
                        <p>Ambas as guerras tiveram consequências duradouras, alterando fronteiras, desencadeando a descolonização e estabelecendo a bipolaridade da Guerra Fria.</p>
                    </div>
                    <img src="../img/grandes-guerras-2.webp" alt="Grandes Guerras">
                </div>
            </section>

            <section id="guerra-fria" class="evento guerra-fria">
                <div class="evento-conteudo">
                    <img src="../img/guerra-fria-2.jfif" alt="Guerra Fria">
                    <div class="evento-text">
                        <h3>Guerra Fria</h3>
                        <p>A Guerra Fria foi um período de tensão política e militar entre os Estados Unidos e a União Soviética, de 1947 a 1991, sem um confronto militar direto. Este conflito ideológico se manifestou em várias frentes, incluindo a corrida armamentista, a corrida espacial e intervenções em países terceiros.</p>
                        <p>Os principais eventos da Guerra Fria incluem:</p>
                        <p><strong>Corrida Espacial:</strong>A competição entre os EUA e a URSS para dominar o espaço culminou com o lançamento do satélite Sputnik em 1957 e a missão Apollo 11, que levou os primeiros homens à Lua em 1969.</p>
                        <p><strong>Conflitos por Procuração:</strong>As duas potências influenciaram guerras em países como Coreia, Vietnã e Afeganistão, tentando expandir suas ideologias.</p>
                        <p><strong>Queda do Muro de Berlim:</strong>Em 1989, a queda do Muro de Berlim simbolizou o colapso da divisão ideológica e política entre Leste e Oeste, levando à reunificação da Alemanha e ao fim da Guerra Fria.</p>
                        <p>A Guerra Fria teve um impacto profundo na política global, moldando alianças e conflitos até os dias de hoje, e deixou legados que ainda são debatidos na geopolítica contemporânea.</p>
                    </div>
                </div>
            </section>
        </div>
        <section id="linhaTempo">
    <div class="titulo-linhaTempo">
        <h1>LINHA DO TEMPO</h1>
        <hr>
        <p>Principais Eventos</p>
    </div>
    <div class="timeline">
        <ul>
            <!-- Evento 1 -->
            <li>
                <div class="content">
                    <h3>Revolução Francesa</h3>
                    <p>Iniciada em 1789, a Revolução Francesa marca o fim da monarquia absolutista na França e inspira movimentos de independência e revoluções democráticas em todo o mundo.</p>
                </div>
                <div class="time">
                    <h4>1789</h4>
                </div>
                <div class="img-direita">
                    <img src="../img/revolucao-francesa.png" alt="">
                </div>
            </li>
            <!-- Evento 2 -->
            <li>
                <div class="content">
                    <h3>Revolução Industrial</h3>
                    <p>A segunda metade do século XVIII vê o início da Revolução Industrial na Inglaterra, mudando a produção para o uso de máquinas e transformando profundamente a sociedade e a economia.</p>
                </div>
                <div class="time">
                    <h4>Século XVIII</h4>
                </div>
                <div class="img-esquerda">
                    <img src="../img/revolucao-industrial.png" alt="">
                </div>
            </li>
            <!-- Evento 3 -->
            <li>
                <div class="content">
                    <h3>Independência da América Latina</h3>
                    <p>No início do século XIX, várias colônias latino-americanas se tornaram independentes, influenciadas pela Revolução Francesa e pela independência dos Estados Unidos.</p>
                </div>
                <div class="time">
                    <h4>1810 - 1825</h4>
                </div>
                <div class="img-direita">
                    <img src="../img/america-latina.png" alt="">
                </div>
            </li>
            <!-- Evento 4 -->
            <li>
                <div class="content">
                    <h3>Primeira Guerra Mundial</h3>
                    <p>De 1914 a 1918, a Primeira Guerra Mundial envolveu várias nações e causou destruição em massa, mudanças geopolíticas significativas e levou à criação da Liga das Nações.</p>
                </div>
                <div class="time">
                    <h4>1914 - 1918</h4>
                </div>
                <div class="img-esquerda">
                    <img src="../img/primeira_guerra.jpg" alt="">
                </div>
            </li>
            <!-- Evento 5 -->
            <li>
                <div class="content">
                    <h3>Segunda Guerra Mundial</h3>
                    <p>De 1939 a 1945, a Segunda Guerra Mundial foi o maior conflito armado da história, terminando com a criação da ONU e iniciando a Guerra Fria entre EUA e URSS.</p>
                </div>
                <div class="time">
                    <h4>1939 - 1945</h4>
                </div>
                <div class="img-direita">
                    <img src="../img/segunda_guerra.jpg" alt="">
                </div>
            </li>
            <!-- Evento 6 -->
            <li>
                <div class="content">
                    <h3>Declaração dos Direitos Humanos</h3>
                    <p>Em 1948, a ONU proclama a Declaração Universal dos Direitos Humanos, estabelecendo princípios fundamentais de liberdade, justiça e paz.</p>
                </div>
                <div class="time">
                    <h4>1948</h4>
                </div>
                <div class="img-esquerda">
                    <img src="../img/direitos_humanos.png" alt="">
                </div>
            </li>
            <!-- Evento 7 -->
            <li>
                <div class="content">
                    <h3>Queda do Muro de Berlim</h3>
                    <p>Em 1989, a queda do Muro de Berlim marca o fim da Guerra Fria e simboliza a reunificação da Alemanha e o colapso do bloco socialista na Europa.</p>
                </div>
                <div class="time">
                    <h4>1989</h4>
                </div>
                <div class="img-direita">
                    <img src="../img/queda_muro.jfif" alt="">
                </div>
            </li>
            <!-- Evento 8 -->
            <li>
                <div class="content">
                    <h3>Início da Internet Comercial</h3>
                    <p>No início da década de 1990, a internet passou a ser acessível ao público em geral e a se tornar uma plataforma para o comércio eletrônico, iniciando uma revolução digital.</p>
                </div>
                <div class="time">
                    <h4>1991</h4>
                </div>
                <div class="img-esquerda">
                    <img src="../img/interner_surg.jpg" alt="">
                </div>
            </li>
            <!-- Evento 9 -->
            <li>
                <div class="content">
                    <h3>Atentados de 11 de setembro</h3>
                    <p>Em 2001, os atentados terroristas nos Estados Unidos mudaram o cenário político e de segurança mundial, levando a uma reestruturação nas políticas internacionais.</p>
                </div>
                <div class="time">
                    <h4>2001</h4>
                </div>
                <div class="img-direita">
                    <img src="../img/11-setembro.jpg" alt="">
                </div>
            </li>
            <!-- Evento 10 -->
            <li>
                <div class="content">
                    <h3>Crise Econômica Global de 2008</h3>
                    <p>A crise financeira de 2008 abalou as economias mundiais, originada no colapso do mercado imobiliário nos EUA, e afetou profundamente a economia global.</p>
                </div>
                <div class="time">
                    <h4>2008</h4>
                </div>
                <div class="img-esquerda">
                    <img src="../img/crise-economica.jpg" alt="">
                </div>
            </li>
            <div style="clear:both;"></div>
        </ul>
    </div>
</section>

        <button id="backToTop" onclick="scrollToTop()">&#8250;</button>
        <section id="section-videos">
            <h2>Material de estudo</h2>
            <div class="videos">
                <div class="video-estudo">
                    <iframe width="100%" height="330" src="https://www.youtube.com/embed/D25cxMBC2qk?si=63cbIga7mfzyaR12" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>		           
                </div>
                <div class="video-estudo">
                    <iframe width="100%" height="330" src="https://www.youtube.com/embed/eQ08AS5ZHQQ?si=LGy7HMbGnzJLbaBD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    
                </div>
                <div class="video-estudo">
                    <iframe width="100%" height="330" src="https://www.youtube.com/embed/ZfZAle8CVgg?si=7xqB5pO4wHJtG-zs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    
                </div>
                <div class="video-estudo">
                    <iframe width="100%" height="330" src="https://www.youtube.com/embed/RedndCHHtYc?si=WmgFFi4VJ4R3TYVH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                                             
                </div>
                <div class="video-estudo">
                    <iframe width="100%" height="330" src="https://www.youtube.com/embed/0DdJVUI5U5A?si=WRoFjSwUUJ5liF_1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    
                </div>
                <div class="video-estudo">
                    <iframe width="100%" height="330" src="https://www.youtube.com/embed/eg47cCMcQr0?si=qgrlnZTA6FyeIwTp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    
                </div>
            </div>
        </section>
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