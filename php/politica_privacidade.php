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
    <title>Politica e Privacidade</title>
    <link rel="stylesheet" href="../css/politica_privacidade.css">
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
                    <li><a href="inicio.php">Início</a></li>
                    <li><a href="glossario.php">Glossário</a></li>
                    <li><a href="atividades.php">Atividades Complementares</a></li>
                    <?php if (isset($_SESSION['nome_sessao'])): ?>
                        <div class="user-vector">
                            <img id="logo-vector" src="../img/user-vector.png" alt="">
                            <p><?= $_SESSION['nome_sessao'] ?></p>
                            <p><?= $_SESSION['tipo_sessao'] ?></p>
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
        <section class="politica">
            <h2>Política de Privacidade</h2>
            <p>Bem-vindo à Política de Privacidade do site <strong>História em Foco</strong>. Ao acessar ou usar este site, você aceita as práticas descritas aqui. Esta política detalha como coletamos, usamos e protegemos suas informações.</p>

            <h3>1. Coleta de Informações</h3>
            <p>Coletamos informações pessoais que você nos fornece diretamente ao utilizar o site, incluindo dados de cadastro e navegação.</p>

            <h3>2. Uso das Informações</h3>
            <p>Utilizamos suas informações para personalizar sua experiência, fornecer suporte, e para melhorar o conteúdo e a funcionalidade do site.</p>

            <h3>3. Compartilhamento de Dados</h3>
            <p>Não compartilhamos suas informações pessoais com terceiros, exceto quando necessário para fornecer serviços ou conforme exigido por lei.</p>

            <h3>4. Segurança</h3>
            <p>Adotamos medidas para proteger suas informações pessoais contra acesso não autorizado e uso indevido.</p>

            <h3>5. Alterações na Política</h3>
            <p>Podemos modificar esta Política de Privacidade a qualquer momento. Recomendamos que você revise esta página regularmente para se manter informado.</p>
            
            <h3>6. Contato</h3>
            <p>Se tiver dúvidas sobre esta política, entre em contato através dos meios disponíveis na seção de contato.</p>
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
                    <li><a href="https://www.linkedin.com/in/kaiqueferreira0/" target="_blank">Kaique Bernardes Ferreira</a></li>
                    <li><a href="https://www.linkedin.com/in/jo%C3%A3o-gustavo-mota-ramos-9b60242a2/" target="_blank">João Gustavo Mota Ramos</a></li>
                    <li><a href="https://www.linkedin.com/in/jo%C3%A3o-pedro-da-cunha-machado-2089482b7/" target="_blank">João Pedro da Cunha Machado</a></li>
                    <li><a href="https://www.linkedin.com/in/murilo-silva-0377322b7/" target="_blank">Murilo Henrique Souza Silva</a></li>
                    <li><a href="https://www.linkedin.com/in/yago-moraes-6a09b3326/" target="_blank">Yago Roberto Gomes Moraes</a></li>
                </ul>
            </div>
            <div class="footer-section links">
                <h3>Links Úteis</h3>
                <ul>
                    <li><a href="termosDeUso.php">Termos de Uso</a></li>
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