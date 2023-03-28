#include <cs50.h>
#include <stdio.h>
#include <math.h>

/*
Use get_float para obter a entrada do usuário e printf para gerar sua resposta.
Pedimos que você use get_float para que possa lidar com reais e centavos.
Se o usuário não fornecer um valor não negativo,
seu programa deve solicitar novamente ao usuário uma quantia válida
até que o usuário concorde.
Converter os dólares inseridos pelo usuário em centavos
 (ou seja, de um float para um int).
 Utilize o ponto final ao invés de vírgula!!
 Usando o round, que é declarado na math.h.
 int centavos = round(reais * 100);
*/

int main(void)
{
  float valor;
  get_float("Digite um valor a ser trocado por moedas.");

   do
   {
      valor = get_float("Digite um valor a ser trocado por moedas.");
   } while (valor <= 0);
   
   int centavos = round(valor * 100);

   int total_moedas = 0;
    
    do
    {
        if (centavos >= 25)
        {
            centavos = centavos - 25;
        }

        else if (centavos >= 10)
        {
            centavos = centavos - 10;
        }

        else if (centavos >= 5)
        {
            centavos = centavos - 5;
        }

        else if (centavos >= 1)
        {
            centavos = centavos - 1;
        }
        total_moedas++;
    }
    while (centavos > 0);

    printf("O total de moedas será: %i\n", total_moedas);
} 