const h1 = document.getElementById('texto');
    const text = 'Cadastrar';

    let i = 0;

    function escreverTexto() {
      if (i < text.length) {
        h1.innerHTML += text.charAt(i);
        i++;
        setTimeout(escreverTexto, 75);
      }
    }

    escreverTexto();