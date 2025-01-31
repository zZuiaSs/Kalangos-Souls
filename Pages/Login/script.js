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
var senha = document.getElementById("Senha")
var entrar = document.getElementById("Enviar");
    
var campo_mensagem = document.getElementById("mensagem");
let verficarAtivo = true;
    
// entrar.addEventListener('click', function() {
//   if(!verficarAtivo)return;
    
//     if()

// });