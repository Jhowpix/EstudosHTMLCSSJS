<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica PHP</title>
</head>
<body>
    <?php
    $v[0] = 4;
    $v[1] = 9;
    $v[2] = 3;
    print_r($v);
  /*
    outras opcoes 
    var_dump 
    avar_export
  */
    ?>


<?php
 $letra = chr(67);
 echo "A letra de codigo 67 é $letra";
?>

<?php
$letra = "D";
$cod = ord($letra);
echo "A letra $letra tem o código $cod";
?>
<br>

<?php
$nome = "JHONATAN";
$nome2 = strtolower ($nome);
echo "seu nome é: $nome2";
print("\nSeu nome é ".ucfirst($nome)) ;

$nome4 = "jhonatan";
print("\nSeu nome é ".ucwords($nome4));
print("\nSeu nome é ".strrev($nome4));

$frase = "Estou aprendendo PHP";
echo "\n $frase";

$pos = strpos($frase, "PHP");
echo "\n A string PHP foi encontrada na posiçao $pos";

$pos = stripos($frase, "php");
echo "\n A string PHP foi encontrada na posiçao $pos";

$frase1 = "Estou aprendendo PHP no curso em video PHP, tem diferença do php minusculo.";
$cont = substr_count($frase1, "PHP");
print("\nPHP foi emcontrado $cont vezes\n");

$site = "Curso em Video.";
$sub = substr($site, 0 ,5);

echo "$sub";

$sub1 = substr($site, 9,);
print("\n".strrev($sub1));

$sub1 = substr($site, 9, 5);
print("\n".strrev($sub1));

//STR_PAD_RIGHT
//STR_PAD_LEFT
//STR_PAD-BOTH   == CENTER
//str_repeat("teste", 5)
//str_replace   == troca  string
//str_ireplace   == ignora e maiusculas e minusculas 

$testeSTR = "...palavra...";
$testeCenter = str_pad($testeSTR, 50, " ", STR_PAD_BOTH);
print("\nTeste das funçoes str $testeCenter visualizar.");

$testeCenter = str_pad($testeSTR, 50, " ", STR_PAD_RIGHT);
print("\nTeste das funçoes str $testeCenter visualizar.");

$testeCenter = str_pad($testeSTR, 50, " ", STR_PAD_LEFT);
print("\nTeste das funçoes str $testeCenter visualizar.");

$txt = str_repeat("PHP", 5);
print("\nO texto foi $txt");

//fim desta aula 



?> 
</body>
</html>