//vamos criar referencias ao form e ao elemento h3

const frm = document.querySelector("form");
const resp = document.querySelector("h3");

// criar um ouvinte de evento ao clicar no botao submit 

frm.addEventListener("submit", (e)=>{
    const nome = frm.inNome.value // obtém o nome digitado no form
resp.innerText="Olá " + nome; //exibe a resposta do programa 
e.preventDefault() //evita o envio do form
})

