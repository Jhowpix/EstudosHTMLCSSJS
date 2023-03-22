
alert("Bem vindo!");
console.log('Meu... perdi as constas de quantos programas...');

const nome = prompt('Qual é seu nome?');
alert('Óla' + ' ' + nome );

const num = prompt('Digite um número para obter o doblo dele.');
alert('O dobro de' + ' ' + num + ' ' + 'é' + ' ' + (num * 2));
// ou 
const dobro = num * 2;
console.log('O dobro é:' + ' ' + dobro);

//soma de dois numeros
// pratique abaixo observando o comportamento de cada comando
const num1 = parseInt(prompt('digite um valor a ser somado'));
console.log(num1);
const num2 = parseInt(prompt('digite o segundo numero'));
console.log(num2);
const num3 = num1 + num2;
console.log(num1 + num2);
console.log('...');
alert('a soma é:'+ ' ' + num3);
console.log(num3);


console.log('Vamos jantar');
const valorDoJantar  = 80.00;
const taxaGarcon = valorDoJantar * 0.10;

console.log('valor do jantar R$' +
 valorDoJantar + '\n Taxa do Garçon R$' + 
 taxaGarcon + '\nValor Total R$'+ (valorDoJantar + taxaGarcon));

 // ou 

 const jantar = parseInt(prompt('valor do jantar'));
 const garcon = parseInt(jantar * 0.10);
 console.log(jantar * 0.10); //observe que vai dar um numero enorme desta forma 
 alert('Valor do jantar R$'+ jantar + '\n Taxa garçon R$' + 
 garcon + '\nTotal R$'+ (jantar + garcon));

 