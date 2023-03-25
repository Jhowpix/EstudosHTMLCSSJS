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
  <p>PHP tambem é conhecida como Personal Hypertext Processor.</p>
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
<!-- continua em outro arquivo -->
</body>
</html>