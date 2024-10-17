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
    login.style.left = "40px"
})