const frm1 = document.querySelector("form");
const resp1 = document.querySelector("h3");
const resp2 = document.querySelector("h4");
frm1.addEventListener("submit",(e) => {
    const titulo = frm1.inTitulo.value;  // obtem conteudo dos campos.
    const duracao = Number(frm1.inDuracao.value);

    const horas = Math.floor( duracao / 60 ); //arredonda para baixo o resultado.
    const minuto = duracao % 60; //obtem o resto da divisao.

    resp1.innerText = titulo; // exibe as respostas.
    resp2.innerText =  `${horas} horas(s) e ${minuto} minutos(s)`;

    e.preventDefault();  // evita envio do form
})