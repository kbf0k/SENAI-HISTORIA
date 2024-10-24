
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
            <a href="inicio.php"><img src="../img/LOGO-HISTORIA-INICIO-SEM-FUNDO.png" alt="Logo"></a>
            <h1>Idade Antiga</h1>
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
                            <a href="../html/idade_contemporanea.html">Idade Contemporânea</a>
                        </div>
                    </li>
                    <li><a href="glossario.php">Glossário</a></li>
                    <li><a href="atividades.php">Atividades Complementares</a></li>

                    <?php if (isset($_SESSION['nome_sessao'])): ?>
                    <div class="user-vector">
                        <img id="logo-vector" src="../img/user-vector.png" alt="Usuário">
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
        <h1>Idade Antiga</h1>
        <p id="intro">A Idade Antiga compreende o período que se inicia com o surgimento da escrita, por volta de 3.500 a.C., e vai até a queda do Império Romano do Ocidente, em 476 d.C.</p>
        
        <div>
            <img src="../img/idade-antiga-civilizacao.webp" alt="Civilizações da Idade Antiga">
            <p id="division">A Idade Antiga abrange o florescimento de grandes civilizações, como Egito, Mesopotâmia, Grécia e Roma.</p>
        </div>

        <p id="overview">Na Idade Antiga, surgiram as primeiras cidades organizadas, impérios e estados centralizados, além das primeiras formas de governo, religião estruturada, escrita e avanços na ciência e nas artes. As principais civilizações desse período foram: Egito, Mesopotâmia, Grécia e Roma, cada uma delas com contribuições marcantes para a história humana.</p>

        <h2>Civilizações da Idade Antiga</h2>
        <div class="container">
            <ul class="dropdown-list">
                <li>
                    <button class="dropdown-btn">Egito</button>
                    <div class="dropdown-content">
                        <h2>Civilização Egípcia</h2>
                        <p id="egito-desc">A civilização egípcia floresceu nas margens do rio Nilo, no nordeste da África, e teve seu apogeu entre 3.100 a.C. e 30 a.C., quando foi conquistada pelos romanos.</p>
                        <h3>Principais Características:</h3>
                        <h4>Faraós:</h4>
                        <p>O Egito era governado por faraós, considerados deuses vivos, e a sociedade era altamente hierarquizada.</p>

                        <h4>Pirâmides:</h4>
                        <p>As pirâmides, especialmente a de Quéops, são os monumentos mais icônicos do Egito Antigo, utilizadas como tumbas para os faraós.</p>

                        <h4>Escrita Hieroglífica:</h4>
                        <p>O Egito desenvolveu uma escrita complexa, conhecida como hieroglífica, usada em templos, túmulos e documentos administrativos.</p>
                        <img src="../img/egito-piramides.webp" alt="Pirâmides do Egito">
                        
                        <h4>Religião:</h4>
                        <p>A religião egípcia era politeísta, com deuses como Rá, Ísis, Osíris e Anúbis. Acreditava-se na vida após a morte, e o processo de mumificação era crucial para garantir a vida eterna.</p>
                    </div>
                </li>
                <li>
                    <button class="dropdown-btn">Mesopotâmia</button>
                    <div class="dropdown-content">
                        <h2>Civilização Mesopotâmica</h2>
                        <p>A Mesopotâmia, localizada entre os rios Tigre e Eufrates (atual Iraque), foi o berço das primeiras civilizações da humanidade, como os sumérios, acádios, babilônios e assírios.</p>
                        
                        <h3>Principais Características:</h3>
                        <h4>Escrita Cuneiforme:</h4>
                        <p>Os mesopotâmicos foram os primeiros a desenvolver um sistema de escrita, a cuneiforme, usada em tábuas de argila.</p>
                        <img src="../img/mesopotamia-escrita.webp" alt="Escrita Cuneiforme da Mesopotâmia">
                        
                        <h4>Conquistas Científicas:</h4>
                        <p>Desenvolveram avanços na astronomia, matemática (sistema sexagesimal) e criaram o Código de Hamurábi, um dos primeiros códigos de leis escritos da história.</p>

                        <h4>Arquitetura e Zigurates:</h4>
                        <p>Zigurates eram imponentes templos escalonados, dedicados às divindades locais.</p>

                        <h4>Religião:</h4>
                        <p>A religião mesopotâmica era também politeísta, com deuses como Anu, Enlil e Marduk. As crenças eram fortemente associadas aos fenômenos naturais e à agricultura.</p>
                    </div>
                </li>
                <li>
                    <button class="dropdown-btn">Grécia</button>
                    <div class="dropdown-content">
                        <h2>Civilização Grega</h2>
                        <p>A civilização grega é conhecida por suas contribuições à filosofia, artes, política e ciência, florescendo entre os séculos VIII a.C. e IV a.C.</p>
                        
                        <h3>Principais Características:</h3>
                        <h4>Democracia:</h4>
                        <p>Atenas foi o berço da democracia, um sistema de governo no qual os cidadãos participavam diretamente nas decisões políticas.</p>
                        <img src="../img/grecia-templo.webp" alt="Templo Grego">
                        
                        <h4>Filosofia e Ciência:</h4>
                        <p>Pensadores como Sócrates, Platão e Aristóteles revolucionaram o pensamento ocidental com suas ideias filosóficas. Na ciência, matemáticos como Pitágoras e Euclides fizeram descobertas fundamentais.</p>

                        <h4>Arte e Arquitetura:</h4>
                        <p>Os gregos são conhecidos por sua arte sofisticada, especialmente na escultura e na arquitetura, como o famoso Parthenon em Atenas.</p>

                        <h4>Mitologia:</h4>
                        <p>A religião grega era politeísta, com deuses como Zeus, Hera, Poseidon e Atena, e a mitologia grega influenciou profundamente a cultura ocidental.</p>
                    </div>
                </li>
                <li>
                    <button class="dropdown-btn">Roma</button>
                    <div class="dropdown-content">
                        <h2>Civilização Romana</h2>
                        <p>O Império Romano foi um dos maiores e mais influentes impérios da história, com início no século VIII a.C. e duração até 476 d.C. no Ocidente.</p>
                        
                        <h3>Principais Características:</h3>
                        <h4>República e Império:</h4>
                        <p>Roma começou como uma monarquia, tornou-se uma república em 509 a.C., e finalmente se transformou em império sob Augusto em 27 a.C.</p>
                        <img src="../img/roma-coliseu.webp" alt="Coliseu Romano">
                        
                        <h4>Direito Romano:</h4>
                        <p>Os romanos desenvolveram um sofisticado sistema jurídico, que formou a base do direito ocidental moderno.</p>

                        <h4>Conquistas Militares:</h4>
                        <p>O exército romano foi fundamental para a expansão do império, controlando vastos territórios na Europa, Ásia e África.</p>

                        <h4>Infraestrutura:</h4>
                        <p>Os romanos construíram uma vasta rede de estradas, aquedutos e monumentos, como o Coliseu e o Panteão.</p>

                        <h4>Religião:</h4>
                        <p>No início, a religião romana era politeísta, mas, no século IV d.C., o cristianismo se tornou a religião oficial do império.</p>
                    </div>
                </li>
            </ul>
        </div>
    </main>
    <script>
    document.querySelectorAll('.dropdown-btn').forEach(button => {
        button.addEventListener('click', () => {
            const dropdownContent = button.nextElementSibling;
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        });
    });

    document.getElementById('logout').addEventListener('click', () => {
        Swal.fire({
            title: 'Sair?',
            text: 'Você realmente deseja sair?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sim, sair',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'logout.php';
            }
        });
    });
    </script>
</body>

</html>
