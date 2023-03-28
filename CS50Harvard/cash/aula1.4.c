#include <stdio.h>
#include <cs50.h>

int main (void)
{
  string name = get_string("What's yor name?\n");
  printf("Hllo, %s\n", name);

  int a = 50;
  printf("A variável a vale %d, o seu dobro vale %d\n", a, 2*a);

  printf("Primeira Linha\n");
  printf("Segunda Linha\n");

  int b = 10;
  char ch = 'Z';
  printf("Atualmente, temos b #= %d e ch = %c.\n", b, ch);

    int c, d, e;
    c = 10;
    d = c + 1;
    e = d + 2;

    printf("Valor de cade item é c = %d, d = %d e e = %d\n", c, d, e);

    int f;
    f = 10;
    printf("A variável f vale %d. Seu sucessor e o %d.\n", f, f + 1);

  


/*

debug50 ./aula1.4  this debug use step by step

*/

}