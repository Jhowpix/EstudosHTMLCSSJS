     #include <cs50.h>
#include <stdio.h>

int main(void)
{
    int valor = get_int("Quantos brocos de altura deve ter esta pirâmide? ");

int i;
int o;
int p;
int l;

    for(i=0; i<valor; i++)
    {
        for(o=0; o<valor-i-1; o++)
        {
            printf(" ");
        }
        for(p=0; p<=i; p++)
        {
        printf("#");
        }
    printf(" ");
     for (l=0; l<=i; l++)
        {
            printf("#");
        }

        printf("\n");
   }

}
