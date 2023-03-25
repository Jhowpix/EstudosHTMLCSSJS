<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>

date()
<p>fotamato da data.</p>
<?php
echo "hoje" . date("Y/m/d") . "<br>";
echo "hoje" . date("Y.m.d") . "<br>";
echo "hoje" . date("Y-m-d") . "<br>";
echo "hoje" . date("l");
?>

<p>ajuste de fuso horario.</p>
<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>

<p>A função PHP <strong>mktime()</strong> retorna o timestamp Unix para uma data.<br>
   O registro de data e hora do Unix contém o número de segundos
    entre a época do Unix (1º de janeiro de 1970 00:00:00 GMT) 
    e o horário especificado.</p>

<p>vamos ver form</p>
get envia pela url 
o post envia por pacotes
    
<form method="get" action="dados.php"></form>


</body>
</html>