<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email_digitado = $_POST['email'];
        $senha_digitado = $_POST['senha'];
        
        $sql = "SELECT * FROM usuarios WHERE email_usuario = ? AND senha_usuario = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("si", $email_digitado, $senha_digitado);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $usuario_logado = $result->fetch_assoc();
            $_SESSION['nome_sessao'] = $usuario_logado['nome_usuario'];
            $_SESSION['tipo_sessao'] = $usuario_logado['tipo_usuario'];
            header('location: html/inicio.php');
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <script src="javascript/login.js" defer></script>
    <link rel="shortcut icon" href="img/hisotoria-logo.png" type="image/x-icon">
    <title>Login</title>
</head>

<body>
    <main>
        <div id="container">
            <!-- Formulário de Login -->
            <form action="" method="POST" id="login">
                <img src="img/logo-preta.png" alt="">
                <h1>Login</h1>
                <p>Insira suas informações necessárias para realizar o LOGIN</p>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required placeholder="@email.com">

                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required placeholder="******">

                <a id="esqueci-senha" href="html/esqueciSenha.html">Esqueci a Senha</a>

                <button type="submit">Entrar</button>
                
                <div class="criar-conta">
                    <p>Não tem uma conta? <a id="criar-conta" href="#">Criar uma conta</a></p>
                </div>
            </form>

            <!-- Formulário de Cadastro -->
            <form action="cadastrar.php" method="POST" id="cadastrar">
                <button id="voltar">Voltar</button>
                <h1>Cadastrar</h1>

                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>

                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" id="sobrenome" required>

                <label for="tipo">Tipo</label>
                <select name="tipo" id="tipo">
                    <option value="administrador">Administrador</option>
                    <option value="aluno">Aluno</option>
                </select>

                <label for="email_cadastro">Email</label>
                <input type="email" name="email" id="email_cadastro" required placeholder="@email.com">

                <label for="senha_cadastro">Criar Senha</label>
                <input type="password" name="senha" id="senha_cadastro" required placeholder="******">

                <label for="repetir_senha">Repetir Senha</label>
                <input type="password" name="repetir_senha" id="repetir_senha" required placeholder="******">

                <button type="submit">Criar Conta</button>
            </form>
        </div>
    </main>
</body>

</html>
