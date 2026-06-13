const letras = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
let mensagem = 'ATAQUE AO AMANHECER';
let deslocamento = 2;

function cifrarMensagem(texto, des) {
    let msg = texto.toLowerCase();
    let hash = [];
    for (let i = 0; i < msg.length; i++) {
        if (msg[i] == ' ') {
            hash[i] = ' ';
        }
        for (let l = 0; l < letras.length; l++) {
            if (msg[i] == letras[l]) {
                hash[i] = letras[l + des];
            }
        }
    }
    return `${hash.join('')}`;
}

function descifrarMensagem(texto, des) {
    let hash = texto.toLowerCase();
    let msg = [];
    for (let i = 0; i < hash.length; i++) {
        if (hash[i] == ' ') {
            msg[i] = ' ';
        }
        for (let l = 0; l < letras.length; l++) {
            if (hash[i] == letras[l]) {
                msg[i] = letras[l - des];
            }
        }
    }
    return `${msg.join('')}`;
}

const mensagemHash = cifrarMensagem(mensagem, deslocamento); 
console.log(`senha cifrada: ${mensagemHash}`);
console.log(`senha descifrada: ${descifrarMensagem(mensagemHash, deslocamento)}`);