// 1

const h1 = document.getElementById('texto');
const text = 'Login';

let i = 0;

function escreverTexto() {
  if (i < text.length) {
    h1.innerHTML += text.charAt(i);
    i++;
    setTimeout(escreverTexto, 75);
  }
}

escreverTexto();

// 2

var nome = document.getElementById("Nome");
var senha = document.getElementById("Senha");
var entrar = document.getElementById("Enviar");

var campo_mensagem = document.getElementById("mensagem");
let verficarAtivo = true;

entrar.addEventListener('click', function() {
  if (!verficarAtivo) return;
    
  if (nome.value === "" || senha.value === "") {
    campo_mensagem.innerHTML = "Por favor, preencha todos os campos.";
  } else {
    campo_mensagem.innerHTML = "";
    // Add login logic here
    fetch('../../Backend/Router/loginRouter.php?acao=validarLogin', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        nome: nome.value,
        senha: senha.value
      })
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        window.location.href = '../Home/index.php';
      } else {
        campo_mensagem.innerHTML = "Nome ou senha incorretos.";
      }
    })
    .catch(error => {
      console.error('Error:', error);
      campo_mensagem.innerHTML = "Ocorreu um erro. Tente novamente.";
    });
  }
});