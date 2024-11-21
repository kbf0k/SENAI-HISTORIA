<?php
include_once('conexao.php');
session_start();

if (!isset($_SESSION['nome_sessao'])) {
    header('Location: index.php');
    exit();
}

$id_usuario = $_SESSION['id_sessao'];

// Busca informações do usuário no banco de dados
$sql = "SELECT nome_usuario, sobrenome_usuario, email_usuario, tipo_usuario FROM usuarios WHERE id_usuario = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$stmt->bind_result($nome, $sobrenome, $email, $tipo_usuario);
$stmt->fetch();
$stmt->close();

// Atualiza dados do usuário
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $novo_nome = $_POST['nome'];
    $novo_sobrenome = $_POST['sobrenome'];
    $novo_email = $_POST['email'];

    $sql_update = "UPDATE usuarios SET nome_usuario = ?, sobrenome_usuario = ?, email_usuario = ? WHERE id_usuario = ?";
    $stmt = $conexao->prepare($sql_update);

    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conexao->error);
    }

    $stmt->bind_param("sssi", $novo_nome, $novo_sobrenome, $novo_email, $id_usuario);

    if ($stmt->execute()) {
        // Definir a variável de sucesso na sessão
        $_SESSION['success_message'] = 'editado';
    } else {
        echo "Erro ao atualizar o perfil.";
    }
    $stmt->close();
}

// Deletar conta do usuário
if (isset($_POST['delete'])) {
    $sql_delete = "DELETE FROM usuarios WHERE id_usuario = ?";
    $stmt = $conexao->prepare($sql_delete);
    $stmt->bind_param("i", $id_usuario);

    if ($stmt->execute()) {
        session_destroy();
        $_SESSION['success_message'] = 'deletado';
    } else {
        echo "Erro ao deletar a conta.";
    }
    $stmt->close();
}

$conexao->close();
?>

<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/perfil.css">
    <script src="../javascript/perfil.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <script>
    // SweetAlert para exclusão
    document.addEventListener('DOMContentLoaded', function () {
    var successMessage = "<?php echo isset($_SESSION['success_message']) ? $_SESSION['success_message'] : ''; ?>";

    // SweetAlert para exclusão
    document.getElementById('delete-account-btn').addEventListener('click', function () {
        Swal.fire({
            title: "Tem certeza?",
            text: "Essa ação não pode ser desfeita. Deseja realmente excluir sua conta?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Sim, excluir!",
            cancelButtonText: "Cancelar"
        }).then((result) => {
            if (result.isConfirmed) {
                // Enviar o formulário via JavaScript para excluir a conta
                document.getElementById('delete-form').submit();
            }
        });
    });

    // Alerta de sucesso ou edição
    if (successMessage === "editado") {
        Swal.fire({
            title: "Perfil atualizado!",
            text: "O perfil foi atualizado com sucesso.",
            icon: "success",
            confirmButtonColor: "#4b3f35"
        }).then(() => {
            <?php unset($_SESSION['success_message']); ?>
            location.href = location.href;
        });
    } else if (successMessage === "deletado") {
        Swal.fire({
            title: "Conta deletada!",
            text: "Sua conta foi deletada com sucesso.",
            icon: "success",
            confirmButtonColor: "#4b3f35"
        }).then(() => {
            <?php unset($_SESSION['success_message']); ?>
            window.location.href = 'inicio.php';  // Redireciona após a exclusão
        });
    }
});

</script>
</head>
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

<body>
    <main class="conteudo">
        <section class="politica">
            <a id="voltar"><img src="../img/voltar_seta.png" alt="">Voltar</a>
            <h2 id="editar">Editar Perfil</h2>
            <form method="POST" action="perfil.php">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" value="<?php echo htmlspecialchars($nome); ?>" required>
                </div>

                <div class="form-group">
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" name="sobrenome" id="sobrenome" value="<?php echo htmlspecialchars($sobrenome); ?>" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
                </div>
                <div class="form-group">
                <a href="esqueciSenha.php"><button type="button" class="btn">Redefinir Senha</button></a>
                </div>
                <button id="att-profile" type="submit" name="update" class="btn">Atualizar perfil</button>
            </form>

            <h2>Excluir conta</h2>
            <form id="delete-form" method="POST" action="perfil.php" style="display: none;">
                <input type="hidden" name="delete" value="true">
            </form>
            <button type="button" id="delete-account-btn" class="btn delete">Excluir conta</button>

            <!-- Exibe botões extras se o usuário for administrador -->
            <?php if ($_SESSION['tipo_sessao'] === 'Administrador'): ?>
                <h2>Opções de Administrador</h2>
                <button class="btn admin-btn" onclick="location.href='gerenciar_alunos.php'">Gerenciar usuários</button>
                <button class="btn admin-btn" onclick="location.href='criar_adm.php'">Adicionar administrador</button>
            <?php endif; ?>
        </section>
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