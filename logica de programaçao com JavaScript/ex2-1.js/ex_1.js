//vamos criar referencias ao form e ao elemento h3.

const frm = document.querySelector("form");
const resp = document.querySelector("h3");

// criar um ouvinte de evento ao clicar no botao submit.

frm.addEventListener("submit", (e) => {
  const nome = frm.inNome.value; // obtém o nome digitado no form.
  resp.innerText = "Olá " + nome; //exibe a resposta do programa.
  e.preventDefault(); //evita o envio do form.
});

/*vamos ver sobre transpiladores que 
rodam nosso codigo em versoes de browsers mais anticas 
podemos fazer isso com o uso de BABEL (babeljs.io).
*/

const nome = document.querySelector("form").inNome.value;

// in = (input) out = (output).
//funcoes matematicas de classe MATH

Math.abs(-33); // retorna sempre o valor absoluto sempre positivo.

Math.ceil(4.2); // arredonda o valor sempre para mais.

Math.floor(7.9); // arredonda sempre para menos.

Math.pow(3,2); // retorna a base vezes o expoente. ex: 3,2 = 3x3 = 9.

Math.random(); // retorna um numero aleatorio entre 0 e 1 com varias casas decimais.

Math.round(2.7); // arredonda para o valor mais proximo.

Math.sqrt(16); // retorna a raiz quadrada de um numero.

// exemplo funcoes matematicas tem prioridade sobre as demais operacoes aritmeticas.
Math.sqrt(9)*8/2;
// 3*8/2 = 24/2 = 12
 console.log(Math.sqrt(9)*8/2);

 const dias = 12;
 const horas = 24;
 const total = (dias * horas) + " " + "horas";
 console.log(total);

 // observe abaixo
 const x = 10/2*Math.sqrt(9)-4
 //        10/2*          3-4
 //          5* 3 = 15 - 4 = 11
 console.log("Resultado de x =" + " " + x);