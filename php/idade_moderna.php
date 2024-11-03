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
    <link rel="stylesheet" href="../css/idade_moderna.css">
    <script src="../javascript/idade_moderna.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>

</head>
<title>Idade Moderna</title>
</head>

<body>
<header class="header">
        <div class="container logo-menu">
            <div class="logo">
            <a href="inicio.php"><img src="../img/LOGO-HISTORIA-INICIO-SEM-FUNDO.png" alt="Logo"></a>
            <h1>Idade Moderna</h1>
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
    <main class="container">
        <section class="intro-section">
            <h2>Introdução à Idade Moderna</h2>
            <p>A Idade Moderna é o período da história que vai do século XV ao XVIII. Este período é marcado por
                grandes transformações culturais, sociais, políticas e econômicas, como a Reforma Protestante,
                o Renascimento, as Grandes Navegações e a Revolução Científica.</p>
        </section>

        <section class="features-section">
            <h2>Principais Características</h2>
            <ul>
                <li><strong>Renascimento:</strong> Movimento cultural que valorizava o resgate da Antiguidade Clássica,
                    trazendo mudanças na arte, ciência e pensamento.</li>
                <li><strong>Reforma Protestante:</strong> Movimento religioso que desafiou a Igreja Católica, liderado
                    por figuras como Martinho Lutero.</li>
                <li><strong>Expansão Marítima:</strong> Descoberta de novas terras, como a América, pelos europeus,
                    impulsionando o comércio e a colonização.</li>
                <li><strong>Revolução Científica:</strong> Desenvolvimento do método científico e avanços com pensadores
                    como Galileu e Newton.</li>
                <li><strong>Formação dos Estados Nacionais:</strong> Consolidação de Estados centralizados e o início
                    do declínio do feudalismo.</li>
            </ul>
        </section>

        <section class="notable-events">
            <h2>Eventos Notáveis da Idade Moderna</h2>
            <div class="event">
                <h3>Descobrimento da América (1492)</h3>
                <p>A chegada de Cristóvão Colombo ao continente americano marcou o início de uma nova era para a Europa
                    e o mundo, com profundas consequências culturais, sociais e econômicas.</p>
            </div>
            <div class="event">
                <h3>Revolução Industrial (século XVIII)</h3>
                <p>A Revolução Industrial transformou profundamente a economia e a sociedade, marcando a transição
                    para uma produção mecanizada e o crescimento das cidades industriais.</p>
            </div>
        </section>
    </main>
    <footer></footer>
</body>

</html>