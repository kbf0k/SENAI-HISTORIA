<?php
include_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email_digitado = $_POST['email'];
    $senha_digitado = md5($_POST['senha']);

    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email_usuario = ?");
    $stmt->bind_param('s', $email_digitado);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $update = $conexao->prepare("UPDATE usuarios SET senha_usuario = ? WHERE email_usuario = ?");
        $update->bind_param('ss', $senha_digitado, $email_digitado);

        if ($update->execute()) {
            header('Location: index.php');
            exit();
        } 
        else {
            echo 'Erro ao atualizar a senha';
        }
    } 
    else {
        echo 'Email não encontrado';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/esqueciSenha.css">
    <script src="../javascript/esqueciSenha.js" defer></script>
    <link rel="shortcut icon" href="img/hisotoria-logo.png" type="image/x-icon">
    <title>Login</title>
</head>

<body>
    <main>
        <div id="container">
            <form action="" method="POST" id="redefinir-senha">
                <a id="voltar" href="../php/index.php">Voltar</a>
                <h1>Redefinir senha</h1>
                <p>Insira seu e-mail para validar sua identidade e proceder com a alteração da senha</p>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="@email.com">

                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="******">

                <button type="submit">Confirmar</button>
            </form>
        </div>
    </main>
</body>

</html>