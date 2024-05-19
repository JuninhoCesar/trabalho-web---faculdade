const gab="1-A, 2-C, 3-C";
function validarRespostas() { // checa se existe um valor no radio.
    const respostas = {
        a: document.querySelector('input[name="a"]:checked')?.value,
        b: document.querySelector('input[name="b"]:checked')?.value,
        c: document.querySelector('input[name="c"]:checked')?.value
    };

    if (!respostas.a || !respostas.b || !respostas.c) { // verifica se tem um valor nulo e manda uma mensagem de erro se tiver.
        alert('Selecione todas as opções')
    } else {
    

    
    const gabarito = {
        a: 'a1',
        b: 'c2',
        c: 'c3'
    };

    let pontuacao = 0;
    let resultado = "";

    for (const pergunta in respostas) { // loop de repetição com soma.
        if (respostas[pergunta] === gabarito[pergunta]) {
            pontuacao++;
        }
    }

    
   resultado = `Você acertou ${pontuacao} de 3 perguntas.`;
    

    document.getElementById("retorno").innerHTML = resultado; // ele pega e let resultado e coloca dentro do paragrafo com id retorno.
}
}


function gabarito() {
    alert(gab);
}






