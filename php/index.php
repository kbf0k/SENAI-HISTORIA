<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Cadastro de usuário
    if (isset($_POST['nome_cadastro']) && isset($_POST['sobrenome_cadastro']) && isset($_POST['email_cadastro']) && isset($_POST['senha_cadastro'])) {

        $nome_cadastro_digitado = $_POST['nome_cadastro'];
        $sobrenome_cadastro_digitado = $_POST['sobrenome_cadastro'];
        $email_cadastro_digitado = $_POST['email_cadastro'];
        $senha_cadastro_digitado = md5($_POST['senha_cadastro']); // NÃO use md5 em produção! Considere usar bcrypt ou outra função mais segura.

        $sql1 = "INSERT INTO usuarios(nome_usuario,sobrenome_usuario,email_usuario,senha_usuario) VALUES(?,?,?,?)";
        $stmt1 = $conexao->prepare($sql1);
        $stmt1->bind_param('ssss', $nome_cadastro_digitado, $sobrenome_cadastro_digitado, $email_cadastro_digitado, $senha_cadastro_digitado);
        $stmt1->execute();

        // Definindo uma variável de sucesso
        $cadastro_sucesso = true; // Variável que indica sucesso no cadastro
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Login de usuário
    if (isset($_POST['email-login']) && isset($_POST['senha-login'])) {

        $email_digitado = $_POST['email-login'];
        $senha_digitado = md5($_POST['senha-login']); 

        $sql2 = "SELECT * FROM usuarios WHERE email_usuario = ? AND senha_usuario = ?";
        $stmt2 = $conexao->prepare($sql2);
        $stmt2->bind_param("ss", $email_digitado, $senha_digitado);
        $stmt2->execute();
        $result2 = $stmt2->get_result();

        if ($result2->num_rows == 1) {
            $usuario_logado = $result2->fetch_assoc();
            $_SESSION['nome_sessao'] = $usuario_logado['nome_usuario'];
            $_SESSION['tipo_sessao'] = $usuario_logado['tipo_usuario'];
            $_SESSION['id_sessao'] = $usuario_logado['id_usuario'];
            header('location: inicio.php');
            exit();
        } else {
            // Aqui você pode mostrar um alerta de erro, por exemplo, se o login falhar
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../javascript/login.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="img/hisotoria-logo.png" type="image/x-icon">
    <title>Login</title>
</head>

<body>
    <main>
        <div id="container">
            <!-- Formulário de Login -->
            <form action="" method="POST" id="login">
                <img src="../img/../img/LOGO PARA LOGIN.png" alt="">
                <h1>Entrar</h1>
                <label for="email">Email</label>
                <input type="email" name="email-login" id="email" required placeholder="@email.com">

                <label for="senha">Senha</label>
                <input type="password" name="senha-login" id="senha" required placeholder="******">

                <a id="esqueci-senha" href="esqueciSenha.php">Esqueci a Senha</a>

                <button type="submit">Entrar</button>
                
                <div class="criar-conta">
                    <p>Não tem uma conta? <a id="criar-conta" href="#">Criar uma conta</a></p>
                </div>
            </form>

            <!-- Formulário de Cadastro -->
            <form action="" method="POST" id="cadastrar">
                <button id="voltar">Voltar</button>
                <h1>Cadastrar Aluno</h1>

                <label for="nome">Nome</label>
                <input type="text" name="nome_cadastro" id="nome" required>

                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome_cadastro" id="sobrenome" required>

                <label for="email_cadastro">Email</label>
                <input type="email" name="email_cadastro" id="email_cadastro" required placeholder="@email.com">

                <label for="senha_cadastro">Criar Senha <p id="senha_mensagem"></p> </label>
                <input type="password" name="senha_cadastro" id="senha_cadastro" required placeholder="******">

                <label for="repetir_senha">Repetir Senha <h2 id="senha_mensagem2"></h2> </label> 
                <input type="password" name="repetir_senha" id="repetir_senha" required placeholder="******">

                <button type="submit">Criar Conta</button>
            </form>
        </div>
    </main>
    <script>
        // Verificar se o PHP setou a variável 'cadastro_sucesso'
        <?php if (isset($cadastro_sucesso) && $cadastro_sucesso): ?>
            Swal.fire({
                icon: 'success',
                title: 'Usuário cadastrado com sucesso!',
                text: 'Você será redirecionado para a página de login.',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "index.php"; // Redireciona após o OK no alerta
                }
            });
        <?php endif; ?>
    </script>
</body>

</html>
