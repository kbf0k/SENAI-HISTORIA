var criar_conta = document.getElementById('criar-conta');
var voltar = document.getElementById('voltar');
var login = document.getElementById('login');
var cadastrar = document.getElementById('cadastrar');

criar_conta.addEventListener('click', () => {
    login.style.left = "-450px"
    cadastrar.style.left = "0"
})

voltar.addEventListener('click', () => {
    cadastrar.style.left = "900px"
    login.style.left = "25px"
})


document.getElementById('cadastrar').addEventListener('submit', function(event) {
    const senha = document.getElementById('senha_cadastro').value;
    const repetirSenha = document.getElementById('repetir_senha').value;

    if (senha !== repetirSenha) {
        event.preventDefault();
        document.getElementById('senha_mensagem').textContent = 'As senhas não se coincidem';
        document.getElementById('senha_mensagem2').textContent = 'As senhas não se coincidem';
    }
});