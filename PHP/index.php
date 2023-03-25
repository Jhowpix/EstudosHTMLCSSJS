<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP (PHP: Hypertext Preprocessor.)</title>
</head>
<body>

<p>criada em 1994 por Rasmus Lerdorf chamando a 
    ferramenta de <strong>Personal Home Page Tools.</strong><br>
    Em 1995 Rasmus LErdof Criou a 
    segunda versao <strong>Personal Home Page Forms Interpreter.</strong><br>
     Hoje o php é: <strong>PHP: Hypertext Processor</strong><br>
     Para ver suar versoes visite o site
     <a href="https://museum.php.net/">Museu PHP.</a></p>
  <p>PHP é uma linguagem vagamente tipada.</p>
  <p>Arquivos PHP possuem extensão <strong>" .php"</strong></p>
  <p>Sintaxe basíco do PHP</p>
  <?php      ?>

  <p>Saidas PHP "echo e print" as instrucoes podem ser usadas com ou sem parenteses.</p>
  <?php 
    echo "My first PHP script!<br>"; 
    ?>

    <?php
    echo "<h2>PHP é divertido</h2>";
    echo "Olá!<br>";
    echo "Aprendendo PHP PHP!<br>";
    echo "Esta ", "string ", "foi ", "feita", "com muitos paramentros.";
    ?> 

    <?php
    print "<h2>PHP é divertido!</h2>";
    print "Olá!<br>";
    ?>

    <?php echo "Hello, world!<br>" ?>

    <?php 
    $txt = "PHP";
    echo "I love $txt!<br>";
    ?>

<p>Em PHP palavras-chave, classes, funções não diferenciam 
    maiúscula de minúsculas</p>
    <?php
    echo "ola<br>";
    ECHO "OLA<br>";
    Echo "Ola<br>";
    ?>

<p>Comentários</p>
    <?php
    // comentario 

    # comentario

    /*
     comentario
    */
    ?> 

<p>Declarando variáveis</p>
    <?php
    $txt ="Ola";
    $x = 5;
    $y = 10.5;
    ?>
    
    <?php
    $a = 5;
    $b = 4;
    echo $a + $b;
    ?>

<p>A palavra-chave global pode der usada para usar uma 
    variavel dentro de uma funçao.</p>

<?php
$c = 9;
$d = 34;

function myTest(){
    global $c, $d;
    $e = $c + $d;
}
myTest();
echo $e; //outputs 43
?>

<p>static é usada para marcar uma variavel que foi 
    craida dentro de uma funcao mais vai ser reutilizada fora da funcao.</p>

<?php
function test() {
  static $x = 0;
  echo $x;
  $x++;
}

test();
test();
test();
?>

<p>Tipos de dados PHP</p>

<p>
    String<br>
    Integer<br>
    Float<br>
    Boolean<br>
    Array<br>
    Object<br>
    NULL<br>
    Resource<br>
</p>

<p>retorna comprimento sa string. strlen()</p>
<?php
echo strlen("Hello world!"); // 12
?> 

<p>contar palavras em na string. str_word_count()</p>
<?php
echo str_word_count("Hello world!"); // outputs 2
?>

<p>inverter a string. strrev()</p>
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>

<p>sibistituir string. str_replece()</p>
<?php
echo str_replace("jhonatan", "oliveira", "jhonatan silva"); // jhonatan oliveira 
?>

<p>finito ou infinito.  is_finite(), is_infinite()</p>

<p>É um numero?. is_nan()</p>

<p>A funçao é numérica? is_numeric()</p>

<p>Converter valores. int(), integer(), intval()</p>
<?php
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>  

<p>mim e max. min(), max().</p>

<p>valor absoluto. abs()</p>
<?php
echo(abs(-9.3));  //  9.3
?>

<p>reaiz quadrada. sqrt()</p>
<?php
echo(sqrt(16));  //  4
?>

<p>Arredonda flutuante para inteiro. round()</p>
<p>Gera número aleatorio. rand()</p>

<p>Cria uma constante. define()<br>
Sintaxe<br>
define(name, value, case-insensitive)
</p>

<p>operadores aritméticos<br>
Operadores aritméticos<br>
Operadores de atribuição<br>
Operadores de comparação<br>
Operadores de incremento/decremento<br>
Operadores lógicos<br>
Operadores de string<br>
Operadores de matriz<br>
Operadores de atribuição condicional
</p>

<p>possui operadores logicos muito parecidos com os de JavaScript,
     e operadores de incremento e decremento.<br>
    decremento.</p>
    <?php
    $x = 10;  
    echo ++$x; // 11
    ?>  

    
    <?php
    $x = 10;  
    echo $x++; // 10
    ?>  

    <?php
    $x = 10;  
    echo --$x; // 9
    ?>  

    <?php
    $x = 10;  
    echo $x --; // 10
    ?>  

    <p>if</p>
    <?php
$t = date("H");

if ($t < "20") {
  echo "tenha um bom dia";
}
?>

<p>if else</p>
<?php
$t = date("H");

if ($t < "20") {
  echo "tenha um bom dia";
} else {
  echo "tenha uma boa noite";
}
?>

<p>Tambem funciona com if else, else if, else</p>
<p>Temos o switch, foor , while, do while e foreach.</p>

<?php
$x = 1;

do {
  echo "O numro é: $x <br>";
  $x++;
} while ($x <= 5);
?>

<?php
for ($g = 0; $g <= 10; $g++) {
  echo "O numero é: $g <br>";
}
?>

<p>O foreachloop percorre um bloco de código para cada 
    elemento em uma matriz.<br> Podemos usar o " break " 
    para parar um loop.</p>

foreach ($array as $value) {
  code to be executed;
}

<?php
$cor = array("red", "green", "blue", "yellow");

foreach ($cor as $value) {
  echo "$value <br>";
}
?>

<p>funcao em php e bem similar com JavaScript</p>
<?php
function teste() {
  echo "Olá";
}

teste(); 
?>
outro exemplo

<?php
function modelo($carro) {
  echo "$carro veiculo.<br>";
}

modelo("Fusca");
modelo("Uno");
modelo("Brasilia");
modelo("chevette");
modelo("gol");
?>

<p>similar ao JavaScript o php retorna o valor. " return "</p>

<p>Array em php. array()</p>
<?php
$carros = array("Volvo", "BMW", "Toyota");
echo "I like " . $carros[0] . ", " . $carros[1] . " and " . $carros[2] . ".";
?>

<p>retornando o comprimento de um array. count()</p>

<p>podemor percorrer a array. foreach()</p>
<?php
$idade = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($idade as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<p>funções de classificação de array PHP:<br>

sort()- ordenar  ordem crescente<br>
rsort()- ordenar  ordem decrescente<br>
asort()- classificar arrays associativos em ordem crescente, de acordo com o valor<br>
ksort()- classificar arrays associativos em ordem crescente, de acordo com a chave<br>
arsort()- classificar arrays associativos em ordem decrescente, de acordo com o valor<br>
krsort()- classificar arrays associativos em ordem decrescente, de acordo com a chave<br>
</p>

<!-- continua em outro arquivo -->
<?php
include 'pratica.php'
?>
</body>
</html>