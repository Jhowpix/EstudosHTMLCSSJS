/*
alert('Bem Vindo ao mundo JavaScript!')
console.log('Meu perdi as constas programa...')

const nome = prompt('Qual é seu nome?')
alert('Óla' + ' ' + nome )

const num = prompt('Digite um número para obter o doblo dele.')
alert('O dobro de' + ' ' + num + ' ' + 'é' + ' ' + (num * 2))
// ou 
const dobro = num * 2
console.log('O dobro é:' + ' ' + dobro)

//soma de dois numeros
// pratique abaixo observando o comportamento de cada comando
const num1 = parseInt(prompt('digite um valor a ser somado'))
console.log(num1)
const num2 = parseInt(prompt('digite o segundo numero'))
console.log(num2)
const num3 = num1 + num2
console.log(num1 + num2)
console.log('...')
alert('a soma é:'+ ' ' + num3)
console.log(num3)


console.log('Vamos jantar')
const valorDoJantar  = 80.00
const taxaGarcon = valorDoJantar * 0.10

console.log('valor do jantar R$' +
 valorDoJantar + '\n Taxa do Garçon R$' + 
 taxaGarcon + '\nValor Total R$'+ (valorDoJantar + taxaGarcon))

 // ou 

 const jantar = parseInt(prompt('valor do jantar'))
 const garcon = parseInt(jantar * 0.10) 
 console.log(jantar * 0.10) 

 alert('Valor do jantar R$'+
  jantar + '\n Taxa garçon R$' +
   garcon + '\nTotal R$'+
    (jantar + garcon))


    // elaborar um programa que leia um numero calcule e informe os seus vizinhos

   let a = 33
        let b = a - 1
            let c = b + 2
    console.log('numero' + ' de ' +
     a + '\n vizinhos ' + ' ' + b + ' , ' + c)

     //----------------------------------------------------

     // valor da conta numero de clientes e valor a ser pago por cada um
 
    
     let valorPizza = parseFloat(prompt('digite o tatal da conta'))
     let numeroClentes = parseInt(prompt('Numero de clientes'))
     let valorPorCliente = valorPizza / numeroClentes
     alert('valor a ser pago por cliente é R$' + valorPorCliente)

     //------------------------------------------------------------

     //opcao de pagamento a praso ou a vista com juros 

     let valorProdutos = parseFloat(prompt('informe o valor total da compra R$'))
     let parcela = valorProdutos / 3
     let desconto = valorProdutos * 0.10
     let opcao = parseInt(prompt(
        ' Valor total da compra R$'+ 
     valorProdutos + '\nEscolha uma opcao \n1. Parcelado 3 x R$' +
      parcela + '\n2. A vista com 10% de desconto R$'+ (valorProdutos - desconto)))
      if(opcao === 1){
        alert('Sua compra sera parcelada em 3x de R$' + parcela)
      } else if(opcao === 2){
        alert('Pagamento a Vista valor total da compra R$'+ desconto)
      }else{
        alert('Opçao invalida!')
      }
*/
      //calculo de media 
      console.log('media de uma nota 6 + uma nota 8 é ' + ((6+8)/2))