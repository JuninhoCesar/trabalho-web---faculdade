const gab="1-A, 2-C, 3-C";
function validarRespostas() {
    const respostas = {
        a: document.querySelector('input[name="a"]:checked')?.value,
        b: document.querySelector('input[name="b"]:checked')?.value,
        c: document.querySelector('input[name="c"]:checked')?.value
    };

    if (!respostas.a || !respostas.b || !respostas.c) {
        alert('Selecione todas as opções')
    } else {
    // Precisamos que role uma mensagem de erro quando o usuário enviar e não tiver preenchido 
    // todos os lugares conhece o comando required no html ?

    // Fazer uma verificação de quando as 3 respostas não estão preenchidas e mandar uma mensagem de erro
    const gabarito = {
        a: 'a1',
        b: 'c2',
        c: 'c3'
    };

    let pontuacao = 0;
    let resultado = "";

    for (const pergunta in respostas) {
        if (respostas[pergunta] === gabarito[pergunta]) {
            pontuacao++;
        }
    }

    
   resultado = `Você acertou ${pontuacao} de 3 perguntas.`;
    

    document.getElementById("retorno").innerHTML = resultado;
}
}


function gabarito() {
    alert(gab);
}






